<?php
  // <!-- Begin emoji-picker Stylesheets -->
  // <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
  //   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2"> -->
  //   <!-- Bootstrap core CSS -->
  //   <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  //   <!-- Material Design Bootstrap -->
  //   <link href="{{URL::asset('css/mdb.min.css')}}" rel="stylesheet">
  //   <!-- Your custom styles (optional) -->
  //   <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">


// public function update(Request $request, $id)
// {
//   $User = User::with('user_info')->find($id);
//   if(!$User) {
//     return response('User not found', 404);
//   }

//   $UserInfo = $User->user_info;
//   if(!$UserInfo) {
//     $UserInfo = new UserInfo();
//     $UserInfo->user_id = $id;
//     $UserInfo->save();
//   }

//   try {
//     $values = Input::only($UserInfo->getFillable());
//     $UserInfo->update($values);
//   } catch(Exception $ex) {
//     return response($ex->getMessage(), 400);
//   }
// }


 if (! function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     * @return string
     *
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = '')
    {
        static $manifest;
        $publicFolder = '/public';
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $publicPath = $rootPath . $publicFolder;
        if ($manifestDirectory && ! starts_with($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }
        if (! $manifest) {
            if (! file_exists($manifestPath = ($rootPath . $manifestDirectory.'/mix-manifest.json') )) {
                throw new Exception('The Mix manifest does not exist.');
            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }
        if (! starts_with($path, '/')) {
            $path = "/{$path}";
        }
        $path = $publicFolder . $path;
        if (! array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your ".
                'webpack.mix.js output paths and try again.'
            );
        }
        return file_exists($publicPath . ($manifestDirectory.'/hot'))
                    ? "http://localhost:8080{$manifest[$path]}"
                    : $manifestDirectory.$manifest[$path];
    }
}