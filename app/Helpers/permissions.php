<?php

function check_user_permissions($request, $actionName = null, $id = null)
{
    // get current user
    $currentUser = $request->user();

    // current action name
    if($actionName) {
        $currentActionName = $actionName;
    }else {
        $currentActionName = $request->route()->getActionName();
    }

    // get current action name
    $currentActionName = $request->route()->getActionName();
    list($controller, $method) = explode('@', $currentActionName);
    $controller = str_replace(["App\\Http\\Controllers\\Backend\\", "Controller"], "", $controller);
    list($controllerName) = explode("\\", $controller);

    $crudPermissionsMap = [
        'crud'  =>  ['create', 'store', 'edit', 'update', 'destroy', 'store', 'forceDestroy', 'index', 'view', 'restore']
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
                $id = !is_null($id) ? $id : $request->route("article");
                // if the current user has not update-other-post/delete-other-post permission
                if($id && (!$currentUser->can('update-other-post') || !$currentUser->can('delete-other-post')))
                {
                    $post = Post::find($id);
                    if($post->author_id != $currentUser->id){
//                        abort(403, "Forbidden access");
                        return false;
                    }
                }
            }
            // if the user has no permission , don't allow the next request
            elseif(!$currentUser->can("{$permission}-{$className}"))
            {
//                abort(403, "Forbidden access");
                return false;
            }
            break;
        }
    }
    return true;
}