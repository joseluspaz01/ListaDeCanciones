<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>artistas - @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan=2><center><b> @yield('artista') </b</center></td>
        </tr>

       

        @for($i=0; $i< 10; $i++)
        <tr>
            <td><b> Artista  {{$i}} </b></td>
            <td>  </td>
        </tr>
        
        
            @endfor



        
        <tr>
            <td colspan=2><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>