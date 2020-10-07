<?php
namespace Sepisoltani\Iran\Database\seeders;

use Illuminate\Database\Seeder;
use Sepisoltani\Iran\Models\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Province::insert([
            [
                'name' => 'آذربایجان شرقی',
                'en_name' => 'East Azerbaijan',
                'area_code' => (int)'041',
                'lat' => '37.9708291',
                'lng' => '45.6258276'
            ],
            [
                'name' => 'آذربایجان غربی',
                'en_name' => 'West Azerbaijan',
                'area_code' => (int)'044',
                'lat' => '37.8537149',
                'lng' => '43.4486659'
            ],
            [
                'name' => 'اردبیل',
                'en_name' => 'Ardabil',
                'area_code' => (int)'045',
                'lat' => '38.2666961',
                'lng' => '48.2709932'
            ],
            [
                'name' => 'اصفهان',
                'en_name' => 'Isfahan',
                'area_code' => (int)'031',
                'lat' => '32.6622111',
                'lng' => '51.5469407'
            ],
            [
                'name' => 'البرز',
                'en_name' => 'Alborz',
                'area_code' => (int)'026',
                'lat' => '36.0229831',
                'lng' => '50.5568582'
            ],
            [
                'name' => 'ایلام',
                'en_name' => 'Ilam',
                'area_code' => (int)'084',
                'lat' => '33.6369193',
                'lng' => '46.396498'
            ],
            [
                'name' => 'بوشهر',
                'en_name' => 'Bushehr',
                'area_code' => (int)'077',
                'lat' => '28.9109022',
                'lng' => '50.8300214'
            ],
            [
                'name' => 'تهران',
                'en_name' => 'Tehran',
                'area_code' => (int)'021',
                'lat' => '35.696733',
                'lng' => '51.2097335'
            ],
            [
                'name' => 'چهارمحال و بختیاری',
                'en_name' => 'Chaharmahal and Bakhtiari',
                'area_code' => (int)'038',
                'lat' => '31.9053981',
                'lng' => '49.9961703'
            ],
            [
                'name' => 'خراسان جنوبی',
                'en_name' => 'South Khorasan',
                'area_code' => (int)'056',
                'lat' => '32.7569919',
                'lng' => '55.9818821'
            ],
            [
                'name' => 'خراسان رضوی',
                'en_name' => 'Razavi Khorasan',
                'area_code' => (int)'051',
                'lat' => '35.5745983',
                'lng' => '56.6358414'
            ],
            [
                'name' => 'خراسان شمالی',
                'en_name' => 'North Khorasan',
                'area_code' => (int)'058',
                'lat' => '37.4393284',
                'lng' => '55.9749504'
            ],
            [
                'name' => 'خوزستان',
                'en_name' => 'Khuzestan',
                'area_code' => (int)'061',
                'lat' => '31.5130987',
                'lng' => '47.8887379'
            ],
            [
                'name' => 'زنجان',
                'en_name' => 'Zanjan',
                'area_code' => (int)'024',
                'lat' => '36.681',
                'lng' => '48.4231829'
            ],
            [
                'name' => 'سمنان',
                'en_name' => 'Semnan',
                'area_code' => (int)'023',
                'lat' => '35.5776697',
                'lng' => '53.3490938'
            ],
            [
                'name' => 'سیستان و بلوچستان',
                'en_name' => 'Sistan and Baluchestan',
                'area_code' => (int)'054',
                'lat' => '28.2486033',
                'lng' => '58.8107962'
            ],
            [
                'name' => 'فارس',
                'en_name' => 'Fars',
                'area_code' => (int)'071',
                'lat' => '29.4417637',
                'lng' => '50.8556421'
            ],
            [
                'name' => 'قزوین',
                'en_name' => 'Qazvin',
                'area_code' => (int)'028',
                'lat' => '36.2813381',
                'lng' => '49.9466454'
            ],
            [
                'name' => 'قم',
                'en_name' => 'Qom',
                'area_code' => (int)'025',
                'lat' => '34.6887845',
                'lng' => '50.7119792'
            ],
            [
                'name' => 'كردستان',
                'en_name' => 'Kurdistan',
                'area_code' => (int)'087',
                'lat' => '35.6313675',
                'lng' => '45.7441852'
            ],
            [
                'name' => 'كرمان',
                'en_name' => 'Kerman',
                'area_code' => (int)'034',
                'lat' => '30.2731806',
                'lng' => '56.9962094'
            ],
            [
                'name' => 'كرمانشاه',
                'en_name' => 'Kermanshah',
                'area_code' => (int)'083',
                'lat' => '34.3373914',
                'lng' => '47.025833'
            ],
            [
                'name' => 'کهگیلویه و بویراحمد',
                'en_name' => 'Kohgiluyeh and Boyer-Ahmad',
                'area_code' => (int)'074',
                'lat' => '30.8420853',
                'lng' => '50.2442777'
            ],
            [
                'name' => 'گلستان',
                'en_name' => 'Golestan',
                'area_code' => (int)'017',
                'lat' => '35.7699815',
                'lng' => '51.456538'
            ],
            [
                'name' => 'گیلان',
                'en_name' => 'Gilan',
                'area_code' => (int)'013',
                'lat' => '37.5275502',
                'lng' => '48.4421516'
            ],
            [
                'name' => 'لرستان',
                'en_name' => 'Lorestan',
                'area_code' => (int)'066',
                'lat' => '33.5251246',
                'lng' => '47.3312048'
            ],
            [
                'name' => 'مازندران',
                'en_name' => 'Mazandaran',
                'area_code' => (int)'011',
                'lat' => '36.3681381',
                'lng' => '51.1494056'
            ],
            [
                'name' => 'مركزی',
                'en_name' => 'Markazi',
                'area_code' => (int)'086',
                'lat' => '34.6214831',
                'lng' => '48.8664113'
            ],
            [
                'name' => 'هرمزگان',
                'en_name' => 'Hormozgan',
                'area_code' => (int)'076',
                'lat' => '27.1905429',
                'lng' => '53.7073749'
            ],
            [
                'name' => 'همدان',
                'en_name' => 'Hamedan',
                'area_code' => (int)'081',
                'lat' => '34.8124497',
                'lng' => '48.4400271'
            ],
            [
                'name' => 'یزد',
                'en_name' => 'Yazd',
                'area_code' => (int)'035',
                'lat' => '31.879685',
                'lng' => '54.2667267'
            ],
        ]);

    }
}
