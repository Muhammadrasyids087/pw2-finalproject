<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Sport',
            'description' => 'Lamborghini, sebuah ikon dalam dunia otomotif yang terkenal akan desainnya yang memukau dan performa yang mengagumkan. Setiap mobil Lamborghini tidak hanya menjadi kendaraan, tetapi juga sebuah karya seni yang memadukan kekuatan mesin yang luar biasa dengan estetika yang elegan dan futuristik. Dikenal dengan garis-garis aerodinamis yang tajam dan siluet yang menggoda, Lamborghini tidak hanya menawarkan pengalaman mengemudi yang mengasyikkan, tetapi juga menetapkan standar baru dalam hal prestasi dan kecanggihan di jalan raya maupun lintasan balap.



',
            
            ]);

            Type::create([
                'name' => 'Adventure/Family',
                'description' => 'Daihatsu Terios adalah SUV kompak yang sangat dihargai karena kombinasi keandalan, kenyamanan, dan kemampuan off-road yang luar biasa. Dengan desain yang tangguh namun stylish, Terios menawarkan ruang interior yang luas dan fitur-fitur modern yang mengakomodasi kebutuhan sehari-hari dengan baik. Mesinnya yang bertenaga dan sistem penggerak empat roda membuatnya cocok untuk berbagai kondisi medan, dari perkotaan hingga petualangan di alam terbuka. Terios menjadi pilihan ideal bagi mereka yang menginginkan mobil yang serba guna tanpa mengorbankan gaya dan performa.',
                
                ]);

                Type::create([
                    'name' => 'Family',
                    'description' => 'Toyota Innova Reborn adalah pilihan populer di segmen MPV yang dikenal karena kenyamanan, kehandalan, dan fleksibilitasnya. Didesain untuk memenuhi kebutuhan keluarga modern, Innova Reborn menawarkan ruang kabin yang luas dengan konfigurasi tempat duduk yang fleksibel, mampu menampung hingga delapan penumpang dengan nyaman. Mesin bertenaga dan efisien serta teknologi transmisi yang canggih menjadikannya cocok untuk perjalanan jarak jauh maupun perkotaan. Dilengkapi dengan fitur-fitur keselamatan yang lengkap dan sistem hiburan yang modern, Innova Reborn memberikan pengalaman mengemudi yang aman, nyaman, dan menyenangkan bagi penggunanya.',
                    
                    ]);

                Type::create([
                    'name' => 'Adventure/Family/Sport',
                    'description' => 'Toyota Fortuner adalah SUV yang menonjol dengan kombinasi antara kemewahan, ketangguhan, dan daya jelajah yang tak tertandingi. Dikenal sebagai simbol prestise dan kehandalan, Fortuner menawarkan desain kokoh dengan garis-garis yang mengesankan serta ruang kabin yang lapang untuk menampung hingga tujuh penumpang. Didukung oleh mesin bertenaga dan sistem penggerak empat roda yang canggih, Fortuner siap menghadapi tantangan perjalanan baik di jalan raya maupun di luar jalur. Dengan fitur-fitur keselamatan terkini dan teknologi hiburan yang modern, Fortuner tidak hanya memenuhi kebutuhan praktis pengguna, tetapi juga menawarkan pengalaman mengemudi yang mewah dan menyenangkan.',
                    
                    ]);


                        Type::create([
                            'name' => 'Sport/Family',
                            'description' => 'Honda HR-V adalah crossover kompak yang menggabungkan gaya modern dengan kepraktisan dan kenyamanan yang tinggi. Dikenal dengan desain eksterior yang dinamis dan proporsional, HR-V menawarkan ruang interior yang luas dan fleksibel, cocok untuk gaya hidup urban yang aktif. Mesin bertenaga dengan pilihan transmisi CVT yang responsif menjadikannya efisien dalam konsumsi bahan bakar dan menyenangkan untuk dikemudikan. HR-V dilengkapi dengan berbagai fitur keamanan terkini serta teknologi hiburan yang terintegrasi, seperti layar sentuh dengan konektivitas smartphone, menjadikannya pilihan yang populer di kalangan mereka yang menginginkan kombinasi antara kelincahan kota dan kenyamanan SUV.




',
                            
                            ]);

                            Type::create([
                                'name' => 'Sport/Adventure',
                                'description' => 'Mitsubishi Xpander adalah MPV kompak yang terkenal dengan desain modern dan fungsionalitasnya yang luar biasa. Didesain untuk memenuhi kebutuhan keluarga dan mobilitas perkotaan, Xpander menawarkan ruang interior yang luas dengan konfigurasi tempat duduk yang fleksibel, mampu menampung hingga tujuh penumpang dengan nyaman. Mesin bertenaga dan efisien memberikan performa yang handal baik untuk penggunaan sehari-hari maupun perjalanan jarak jauh. Xpander dilengkapi dengan fitur-fitur keselamatan yang lengkap seperti ABS, EBD, dan dual airbag, serta teknologi hiburan yang modern seperti layar sentuh dengan sistem infotainment yang terintegrasi. Ini menjadikan Xpander sebagai pilihan yang populer di pasar MPV dengan kombinasi antara kenyamanan, keamanan, dan kemudahan penggunaan sehari-hari yang sangat dihargai.



',
                                
                                ]);

                                Type::create([
                                    'name' => 'Carry',
                                    'description' => 'Daihatsu Luxio adalah MPV kompak yang dirancang untuk memberikan kenyamanan dan kepraktisan dalam penggunaan sehari-hari. Dikenal dengan desainnya yang simpel namun elegan, Luxio menawarkan ruang kabin yang luas dengan konfigurasi tempat duduk fleksibel, cocok untuk keluarga maupun penggunaan komersial. Mesinnya yang efisien dan handal menjadikannya cocok untuk perjalanan jarak jauh maupun di perkotaan. Luxio dilengkapi dengan fitur-fitur seperti AC ganda, sistem audio dengan konektivitas modern, serta beberapa pilihan varian yang sesuai dengan kebutuhan pengguna. Keandalan Daihatsu dan harga yang kompetitif menjadikan Luxio pilihan yang menarik di segmen MPV kompak.',
                                    
                                    ]);

                                    Type::create([
                                        'name' => 'Carry',
                                        'description' => 'Suzuki Carry adalah kendaraan utilitas yang sangat dihargai dalam kategori mobil pikap kecil. Dikenal dengan desain kompak dan keandalannya, Carry merupakan pilihan yang ideal untuk penggunaan komersial ringan dan mobilitas perkotaan yang efisien. Mesinnya yang ekonomis dan mudah perawatannya menjadikannya cocok untuk berbagai keperluan bisnis seperti pengangkutan barang atau jasa kurir. Carry juga menawarkan kemudahan dalam manuver dengan ukuran yang kompak namun tetap mampu menampung muatan yang cukup besar. Fitur-fitur praktis seperti kabin yang nyaman dan daya tahan yang handal menjadikan Suzuki Carry pilihan yang populer di kalangan pengusaha kecil dan pengguna yang membutuhkan kendaraan utilitas yang andal dan hemat biaya operasional.',
                                        
                                        ]);

      
    }
}
