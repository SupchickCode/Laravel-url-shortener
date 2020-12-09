<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Http\RedirectResponse;

class ShortUrlController extends Controller
{   
    /**
     * Show tmp of main form
     */
    public function show_main_form()
    {
        $title = 'Главная страница';
        return view('tmp/index', compact('title'));
    }


    /**
     * Get url form user input and create new short_url,
     * and than call `Url static method` to insert data,
     * finally return $json with short_url for ajax query
     * 
     * @param Request
     */
    public function get_url_and_return_json(Request $request)
    {
        $short_url = $this->create_short_url(6);
        $url = $request['url'];

        $json = [
            'url' => $short_url
        ];

        #NSERT INTO THE DB
        Url::insert_urls($url, $short_url);

        return response()->json($json);
    }


    /**
     * Get $short_url from $request and try to find data that contains $short_url.
     * If contains return redirect to $default_url from $data
     * else return redirect to `/`
     * 
     * @param Request
     */
    public function redirect_on_right_url(Request $request): RedirectResponse
    {
        $short_url = $request['short_url'];
        $data = Url::select('default_url')->where('short_url', 'Like', '%' . $short_url)->first();

        if ($data) {
            $url = $data['default_url'];
            return redirect($url);
        } else {
            return redirect('/');
        }
    }

    
    /**
     * Simple creator of short_url
     * @param length
     */
    protected function create_short_url(int $length): string
    {
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ123456789';
        $numChars = strlen($chars);

        $host = request()->getSchemeAndHttpHost();
        $short_url = '';

        for ($i = 0; $i < $length; $i++) {
            $short_url .= substr($chars, rand(1, $numChars) - 1, 1);
        }


        return $host . "/" . $short_url;
    }
}
