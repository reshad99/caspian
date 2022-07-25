<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $search;

    public function response($requestType, $data = null, $code)
    {
        $response = [
            'data' => $data,
            'message' => $requestType,
        ];

        return response()->json($response, $code);
    }

    public static function get_month_name($full_date)
    {
							$date = explode('-', $full_date);
							$month = $date[1];
								switch($month)
								{
									case '01':
									$ay = 'Yanvar';
									break;

									case '02':
									$ay = 'Fevraı';
									break;

									case '03':
									$ay = 'Mart';
									break;

									case '04':
									$ay = 'Aprel';
									break;

									case '05':
									$ay = 'May';
									break;

									case '06':
									$ay = 'İyun';
									break;

									case '07':
									$ay = 'İyul';
									break;

									case '08':
									$ay = 'Avqust';
									break;

									case '09':
									$ay = 'Sentyabr';
									break;

									case '10':
									$ay = 'Oktyabr';
									break;

									case '11':
									$ay = 'Noyabr';
									break;

									case '12':
									$ay = 'Dekabr';
									break;
								}
                                $date = $ay.' '.$date[2].', '.$date[0];

                                return $date;
    }


}

class RequestType
{
        const Update = 'Məlumatlar güncəlləndi';
        const Delete = 'Məlumatlar silindi';
        const Create = 'Əlavə olundu';
}
