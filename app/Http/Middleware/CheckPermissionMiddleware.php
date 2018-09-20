<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;

class CheckPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // get current user
        $currentUser = $request->user();

        // get current action name
        $currentActionName = $request->route()->getActionName();
        list($controller, $method) = explode('@', $currentActionName);
        $controller = str_replace(["App\\Http\\Controllers\\Backend\\", "Controller"], "", $controller);
        list($controllerName) = explode("\\", $controller);

        $crudPermissionsMap = [
            'crud'  =>  ['create', 'store', 'edit', 'update', 'destroy', 'store', 'forceDestroy', 'index', 'view', 'restore']
//            'create'    =>  ['create', 'store'],
//            'update'    =>  ['edit', 'update'],
//            'delete'    =>  ['destroy', 'restore', 'forceDestroy'],
//            'read'      =>  ['index', 'view']
        ];

        $classesMap = [
            'Blog'      =>  'post',
            'Category'  =>  'category',
            'User'      =>  'user'
        ];

        foreach ($crudPermissionsMap as $permission => $methods)
        {
            // if current method exists in the method list, check the user permission
            if(in_array($method, $methods) && isset($classesMap[$controllerName]))
            {
                $className = $classesMap[$controllerName];

                if($className == 'post' && in_array($method,['edit', 'update', 'destroy', 'restore', 'forceDestroy']))
                {
                    // if the current user has not update-other-post/delete-other-post permission
                    if(($id = $request->route("article")) && (!$currentUser->can('update-other-post') || !$currentUser->can('delete-other-post')))
                    {
                        $post = Post::find($id);
                        if($post->author_id != $currentUser->id){
                            abort(403, "Forbidden access");
                        }
                    }
                }
                // if the user has no permission , don't allow the next request
                elseif(!$currentUser->can("{$permission}-{$className}"))
                {
                    abort(403, "Forbidden access");
                }
                break;
            }
        }
        return $next($request);
    }
}
