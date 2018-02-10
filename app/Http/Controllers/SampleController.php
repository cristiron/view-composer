<?php

namespace App\Http\Controllers;

use \App\Http\Repository\MovieRepository;

class SampleController extends Controller
{
    /**
     * Return a list of the latest movies to the
     * homepage
     *
     * @param MovieRepository $movie
     *
     * @return View
     */
    public function index(MovieRepository $movies)
    {
        $movieList = $movies->getMovieList();
        $latestMovie = end($movieList);
        foreach($movieList as $mov=>$m){
            echo "<pre>". $mov.' => '.$m."</pre>";
        }
        echo("var_dump(compact('movieList')); resulta:");
       var_dump(compact('movieList'));
       
        $a='aa';
        $b='bb';
        $c='cc';
        $abc=compact("a","b","c");
        var_dump($abc);
       // $qq;
        $ab=['x','y','z'];
        var_dump(compact('ab'));
        print_r(compact('ab'));
        $endab = end($ab);
        var_dump(compact('ab','endab','movieList','latestMovie'));
//echo "<pre>".print_r($abc)."<pre>";
        

        return view('welcome', compact('ab','endab','movieList','latestMovie'));
        //sau AICI E SECRETUL LA CUM COMPACTEAZA KEY VALUE SI BLADE REDA FOREACH
       // return view('welcome', ['ab'=>['x','y','z']]);
    }

    /**
     * pass an array to the 'foo' view
     * as a second parameter.
    */
    public function biz()
    {
        return view('foo', [
            'key_test' => 'value_test_Biz'
        ]);
    }

    /**
     * Pass a key variable to the 'foo view
     * using the compact method as
     * the second parameter.
    */
    public function bar()
    {
        $key_test = 'value_test_Bar';

        return view('foo', compact('key_test'));
    }

    /**
     * Pass a key, value pair to the view
     * using the with method.
    */
    public function baz()
    {
        return view('foo')->with('key_test','value_test_Baz');
    }
}
