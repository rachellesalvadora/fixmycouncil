<?php
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
* 
* @author - Rachelle Salvadora
* @website - rachellesalvadora.com
*/

use Illuminate\Database\Seeder;
use App\Models\Council;
use App\Models\Postcode;

class SuburbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suburbs = $this->getAllSuburbs();

        foreach($suburbs as $suburb) {
            // Check if a valid council id and valid postcode id exist before inserting
            if ($this->getCouncilId($suburb[0]) && $this->getPostcodeId($suburb[0])) {
                DB::table('suburbs')->insert([
                    'postcode_id' => Postcode::where('postcode', $suburb[0])->first()->id,
                    'council_id' => Council::where('postcode', $suburb[0])->first()->id,
                    'name' => $suburb[1],
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
        }
    }

    // Get a council id based on postcode
    public function getCouncilId($postcode)
    {
        $councilId = Council::where('postcode', $postcode)->first();
        if ($councilId) {
            return $councilId->id;
        }
        else {
            return false;
        }
    }

    // Get a postcode id based on postcode from suburb information
    public function getPostcodeId($postcode)
    {
        $postcodeId = Postcode::where('postcode', $postcode)->first();
        if ($postcodeId) {
            return $postcodeId->id;
        }
        else {
            return false;
        }
    }

    // Return all suburbs and postcodes from victoria
    public function getAllSuburbs()
    {
        $suburbs = array();
        $suburbs[] = [
            '3067', 'Abbotsford '
        ];
        $suburbs[] = [
            '3040', 'Aberfeldie '
        ];
        $suburbs[] = [
            '3825', 'Aberfeldy '
        ];
        $suburbs[] = [
            '3714', 'Acheron '
        ];
        $suburbs[] = [
            '3352', 'Addington '
        ];
        $suburbs[] = [
            '3962', 'Agnes '
        ];
        $suburbs[] = [
            '3231', 'Aireys Inlet'
        ];
        $suburbs[] = [
            '3042', 'Airport West'
        ];
        $suburbs[] = [
            '3021', 'Albanvale '
        ];
        $suburbs[] = [
            '3206', 'Albert Park'
        ];
        $suburbs[] = [
            '3971', 'Alberton '
        ];
        $suburbs[] = [
            '3020', 'Albion '
        ];
        $suburbs[] = [
            '3714', 'Alexandra '
        ];
        $suburbs[] = [
            '3350', 'Alfredton '
        ];
        $suburbs[] = [
            '3691', 'Allans Flat'
        ];
        $suburbs[] = [
            '3277', 'Allansford '
        ];
        $suburbs[] = [
            '3364', 'Allendale '
        ];
        $suburbs[] = [
            '3305', 'Allestree '
        ];
        $suburbs[] = [
            '3465', 'Alma '
        ];
        $suburbs[] = [
            '3979', 'Almurta '
        ];
        $suburbs[] = [
            '3078', 'Alphington '
        ];
        $suburbs[] = [
            '3018', 'Altona '
        ];
        $suburbs[] = [
            '3028', 'Altona Meadows'
        ];
        $suburbs[] = [
            '3025', 'Altona North'
        ];
        $suburbs[] = [
            '3249', 'Alvie '
        ];
        $suburbs[] = [
            '3377', 'Amphitheatre '
        ];
        $suburbs[] = [
            '3221', 'Anakie '
        ];
        $suburbs[] = [
            '3715', 'Ancona '
        ];
        $suburbs[] = [
            '3230', 'Anglesea '
        ];
        $suburbs[] = [
            '3414', 'Antwerp '
        ];
        $suburbs[] = [
            '3677', 'Appin Park'
        ];
        $suburbs[] = [
            '3319', 'Apsley '
        ];
        $suburbs[] = [
            '3377', 'Ararat '
        ];
        $suburbs[] = [
            '3631', 'Arcadia '
        ];
        $suburbs[] = [
            '3995', 'Archies Creek'
        ];
        $suburbs[] = [
            '3022', 'Ardeer '
        ];
        $suburbs[] = [
            '3629', 'Ardmona '
        ];
        $suburbs[] = [
            '3480', 'Areegra '
        ];
        $suburbs[] = [
            '3143', 'Armadale '
        ];
        $suburbs[] = [
            '3143', 'Armadale North'
        ];
        $suburbs[] = [
            '3551', 'Arnold '
        ];
        $suburbs[] = [
            '3099', 'Arthurs Creek'
        ];
        $suburbs[] = [
            '3936', 'Arthurs Seat'
        ];
        $suburbs[] = [
            '3364', 'Ascot '
        ];
        $suburbs[] = [
            '3032', 'Ascot Vale'
        ];
        $suburbs[] = [
            '3442', 'Ashbourne '
        ];
        $suburbs[] = [
            '3147', 'Ashburton '
        ];
        $suburbs[] = [
            '3147', 'Ashwood '
        ];
        $suburbs[] = [
            '3195', 'Aspendale '
        ];
        $suburbs[] = [
            '3195', 'Aspendale Gardens'
        ];
        $suburbs[] = [
            '3818', 'Athlone '
        ];
        $suburbs[] = [
            '3049', 'Attwood '
        ];
        $suburbs[] = [
            '3664', 'Avenel '
        ];
        $suburbs[] = [
            '3467', 'Avoca '
        ];
        $suburbs[] = [
            '3034', 'Avondale Heights'
        ];
        $suburbs[] = [
            '3782', 'Avonsleigh '
        ];
        $suburbs[] = [
            '3551', 'Axedale '
        ];
        $suburbs[] = [
            '3747', 'Baarmutha '
        ];
        $suburbs[] = [
            '3340', 'Bacchus Marsh 3340,Bacchus Mars'
        ];
        $suburbs[] = [
            '3670', 'Baddaginnie '
        ];
        $suburbs[] = [
            '3608', 'Bailieston '
        ];
        $suburbs[] = [
            '3875', 'Bairnsdale '
        ];
        $suburbs[] = [
            '3354', 'Bakery Hill'
        ];
        $suburbs[] = [
            '3183', 'Balaclava '
        ];
        $suburbs[] = [
            '3342', 'Ballan '
        ];
        $suburbs[] = [
            '3350', 'Ballarat '
        ];
        $suburbs[] = [
            '3353', 'Ballarat '
        ];
        $suburbs[] = [
            '3354', 'Ballarat Mc'
        ];
        $suburbs[] = [
            '3350', 'Ballarat North'
        ];
        $suburbs[] = [
            '3350', 'Ballarat West'
        ];
        $suburbs[] = [
            '3340', 'Balliang '
        ];
        $suburbs[] = [
            '3666', 'Balmattum '
        ];
        $suburbs[] = [
            '3407', 'Balmoral '
        ];
        $suburbs[] = [
            '3926', 'Balnarring '
        ];
        $suburbs[] = [
            '3971', 'Balook '
        ];
        $suburbs[] = [
            '3103', 'Balwyn '
        ];
        $suburbs[] = [
            '3104', 'Balwyn North'
        ];
        $suburbs[] = [
            '3561', 'Bamawm '
        ];
        $suburbs[] = [
            '3241', 'Bambra '
        ];
        $suburbs[] = [
            '3694', 'Bandiana Milpo'
        ];
        $suburbs[] = [
            '3175', 'Bangholme '
        ];
        $suburbs[] = [
            '3331', 'Bannockburn '
        ];
        $suburbs[] = [
            '3388', 'Banyena '
        ];
        $suburbs[] = [
            '3084', 'Banyule '
        ];
        $suburbs[] = [
            '3691', 'Baranduda '
        ];
        $suburbs[] = [
            '3463', 'Baringhup '
        ];
        $suburbs[] = [
            '3451', 'Barkers Creek'
        ];
        $suburbs[] = [
            '3381', 'Barkly '
        ];
        $suburbs[] = [
            '3352', 'Barkstead '
        ];
        $suburbs[] = [
            '3639', 'Barmah '
        ];
        $suburbs[] = [
            '3557', 'Barnadown '
        ];
        $suburbs[] = [
            '3688', 'Barnawartha '
        ];
        $suburbs[] = [
            '3249', 'Barongarook '
        ];
        $suburbs[] = [
            '3221', 'Barrabool '
        ];
        $suburbs[] = [
            '3249', 'Barramunga '
        ];
        $suburbs[] = [
            '3329', 'Barunah Park'
        ];
        $suburbs[] = [
            '3243', 'Barwon Downs'
        ];
        $suburbs[] = [
            '3227', 'Barwon Heads'
        ];
        $suburbs[] = [
            '3991', 'Bass '
        ];
        $suburbs[] = [
            '3221', 'Batesford '
        ];
        $suburbs[] = [
            '3911', 'Baxter '
        ];
        $suburbs[] = [
            '3375', 'Bayindeen '
        ];
        $suburbs[] = [
            '3981', 'Bayles '
        ];
        $suburbs[] = [
            '3153', 'Bayswater '
        ];
        $suburbs[] = [
            '3153', 'Bayswater North'
        ];
        $suburbs[] = [
            '3807', 'Beaconsfield '
        ];
        $suburbs[] = [
            '3808', 'Beaconsfield Upper'
        ];
        $suburbs[] = [
            '3475', 'Bealiba '
        ];
        $suburbs[] = [
            '3373', 'Beaufort '
        ];
        $suburbs[] = [
            '3193', 'Beaumaris '
        ];
        $suburbs[] = [
            '3135', 'Bedford Road'
        ];
        $suburbs[] = [
            '3251', 'Beeac '
        ];
        $suburbs[] = [
            '3237', 'Beech Forest'
        ];
        $suburbs[] = [
            '3747', 'Beechworth '
        ];
        $suburbs[] = [
            '3160', 'Belgrave '
        ];
        $suburbs[] = [
            '3215', 'Bell Park'
        ];
        $suburbs[] = [
            '3215', 'Bell Post Hil'
        ];
        $suburbs[] = [
            '3221', 'Bellarine '
        ];
        $suburbs[] = [
            '3228', 'Bellbrae '
        ];
        $suburbs[] = [
            '3691', 'Bellbridge '
        ];
        $suburbs[] = [
            '3216', 'Belmont '
        ];
        $suburbs[] = [
            '3198', 'Belvedere Park'
        ];
        $suburbs[] = [
            '3889', 'Bemm River'
        ];
        $suburbs[] = [
            '3946', 'Bena '
        ];
        $suburbs[] = [
            '3671', 'Benalla '
        ];
        $suburbs[] = [
            '3672', 'Benalla '
        ];
        $suburbs[] = [
            '3673', 'Benalla '
        ];
        $suburbs[] = [
            '3900', 'Benambra '
        ];
        $suburbs[] = [
            '3630', 'Benarch '
        ];
        $suburbs[] = [
            '3319', 'Benayeo '
        ];
        $suburbs[] = [
            '3097', 'Bend Of Island'
        ];
        $suburbs[] = [
            '3550', 'Bendigo '
        ];
        $suburbs[] = [
            '3552', 'Bendigo '
        ];
        $suburbs[] = [
            '3554', 'Bendigo Dc'
        ];
        $suburbs[] = [
            '3888', 'Bendoc '
        ];
        $suburbs[] = [
            '3875', 'Bengworden '
        ];
        $suburbs[] = [
            '3125', 'Bennettswood '
        ];
        $suburbs[] = [
            '3960', 'Bennison '
        ];
        $suburbs[] = [
            '3204', 'Bentleigh '
        ];
        $suburbs[] = [
            '3165', 'Bentleigh East'
        ];
        $suburbs[] = [
            '3342', 'Beremboke '
        ];
        $suburbs[] = [
            '3518', 'Berrimal '
        ];
        $suburbs[] = [
            '3351', 'Berringa '
        ];
        $suburbs[] = [
            '3691', 'Berringama '
        ];
        $suburbs[] = [
            '3531', 'Berriwillock '
        ];
        $suburbs[] = [
            '3323', 'Berrybank '
        ];
        $suburbs[] = [
            '3953', 'Berrys Creek'
        ];
        $suburbs[] = [
            '3806', 'Berwick '
        ];
        $suburbs[] = [
            '3472', 'Bet Bet'
        ];
        $suburbs[] = [
            '3691', 'Bethanga '
        ];
        $suburbs[] = [
            '3472', 'Betley '
        ];
        $suburbs[] = [
            '3395', 'Beulah '
        ];
        $suburbs[] = [
            '3590', 'Beverford '
        ];
        $suburbs[] = [
            '3753', 'Beveridge '
        ];
        $suburbs[] = [
            '3707', 'Biggara '
        ];
        $suburbs[] = [
            '3966', 'Binginwarri '
        ];
        $suburbs[] = [
            '3483', 'Birchip '
        ];
        $suburbs[] = [
            '3242', 'Birregurra '
        ];
        $suburbs[] = [
            '3918', 'Bittern '
        ];
        $suburbs[] = [
            '3350', 'Black Hill'
        ];
        $suburbs[] = [
            '3193', 'Black Rock'
        ];
        $suburbs[] = [
            '3130', 'Blackburn '
        ];
        $suburbs[] = [
            '3130', 'Blackburn North'
        ];
        $suburbs[] = [
            '3130', 'Blackburn South'
        ];
        $suburbs[] = [
            '3458', 'Blackwood '
        ];
        $suburbs[] = [
            '3942', 'Blairgowrie '
        ];
        $suburbs[] = [
            '3342', 'Blakeville '
        ];
        $suburbs[] = [
            '3364', 'Blampied '
        ];
        $suburbs[] = [
            '3980', 'Blind Bight'
        ];
        $suburbs[] = [
            '3352', 'Blowhard '
        ];
        $suburbs[] = [
            '3699', 'Bogong '
        ];
        $suburbs[] = [
            '3669', 'Boho South'
        ];
        $suburbs[] = [
            '3860', 'Boisdale '
        ];
        $suburbs[] = [
            '3432', 'Bolinda '
        ];
        $suburbs[] = [
            '3546', 'Bolton '
        ];
        $suburbs[] = [
            '3305', 'Bolwarra '
        ];
        $suburbs[] = [
            '3352', 'Bolwarrah '
        ];
        $suburbs[] = [
            '3888', 'Bonang '
        ];
        $suburbs[] = [
            '3196', 'Bonbeach '
        ];
        $suburbs[] = [
            '3691', 'Bonegilla '
        ];
        $suburbs[] = [
            '3720', 'Bonnie Doon'
        ];
        $suburbs[] = [
            '3870', 'Boolarra '
        ];
        $suburbs[] = [
            '3265', 'Boorcan '
        ];
        $suburbs[] = [
            '3678', 'Boorhaman '
        ];
        $suburbs[] = [
            '3685', 'Boorhaman North'
        ];
        $suburbs[] = [
            '3537', 'Boort '
        ];
        $suburbs[] = [
            '3155', 'Boronia '
        ];
        $suburbs[] = [
            '3518', 'Borung '
        ];
        $suburbs[] = [
            '3599', 'Boundary Bend'
        ];
        $suburbs[] = [
            '3735', 'Bowmans Forest'
        ];
        $suburbs[] = [
            '3128', 'Box Hill'
        ];
        $suburbs[] = [
            '3129', 'Box Hill Nort'
        ];
        $suburbs[] = [
            '3128', 'Box Hill Sout'
        ];
        $suburbs[] = [
            '3725', 'Boxwood '
        ];
        $suburbs[] = [
            '3195', 'Braeside '
        ];
        $suburbs[] = [
            '3630', 'Branditt '
        ];
        $suburbs[] = [
            '3302', 'Branxholme '
        ];
        $suburbs[] = [
            '3019', 'Braybrook '
        ];
        $suburbs[] = [
            '3219', 'Breakwater '
        ];
        $suburbs[] = [
            '3227', 'Breamlea '
        ];
        $suburbs[] = [
            '3131', 'Brentford Square'
        ];
        $suburbs[] = [
            '3860', 'Briagolong '
        ];
        $suburbs[] = [
            '3088', 'Briar Hill'
        ];
        $suburbs[] = [
            '3516', 'Bridgewater On Loddo'
        ];
        $suburbs[] = [
            '3741', 'Bright '
        ];
        $suburbs[] = [
            '3186', 'Brighton '
        ];
        $suburbs[] = [
            '3187', 'Brighton East'
        ];
        $suburbs[] = [
            '3184', 'Brighton Road'
        ];
        $suburbs[] = [
            '3391', 'Brim '
        ];
        $suburbs[] = [
            '3658', 'Broadford '
        ];
        $suburbs[] = [
            '3047', 'Broadmeadows '
        ];
        $suburbs[] = [
            '3301', 'Broadwater '
        ];
        $suburbs[] = [
            '3338', 'Brookfield '
        ];
        $suburbs[] = [
            '3012', 'Brooklyn '
        ];
        $suburbs[] = [
            '3364', 'Broomfield '
        ];
        $suburbs[] = [
            '3350', 'Brown Hill'
        ];
        $suburbs[] = [
            '3685', 'Browns Plains'
        ];
        $suburbs[] = [
            '3056', 'Brunswick '
        ];
        $suburbs[] = [
            '3057', 'Brunswick East'
        ];
        $suburbs[] = [
            '3055', 'Brunswick West'
        ];
        $suburbs[] = [
            '3885', 'Bruthen '
        ];
        $suburbs[] = [
            '3375', 'Buangor '
        ];
        $suburbs[] = [
            '3885', 'Buchan '
        ];
        $suburbs[] = [
            '3240', 'Buckley '
        ];
        $suburbs[] = [
            '3958', 'Buffalo '
        ];
        $suburbs[] = [
            '3737', 'Buffalo River'
        ];
        $suburbs[] = [
            '3428', 'Bulla '
        ];
        $suburbs[] = [
            '3352', 'Bullarook '
        ];
        $suburbs[] = [
            '3461', 'Bullarto '
        ];
        $suburbs[] = [
            '3105', 'Bulleen '
        ];
        $suburbs[] = [
            '3437', 'Bullengarook '
        ];
        $suburbs[] = [
            '3821', 'Buln Buln'
        ];
        $suburbs[] = [
            '3634', 'Bunbartha '
        ];
        $suburbs[] = [
            '3851', 'Bundalaguah '
        ];
        $suburbs[] = [
            '3730', 'Bundalong '
        ];
        $suburbs[] = [
            '3083', 'Bundoora '
        ];
        $suburbs[] = [
            '3260', 'Bungador '
        ];
        $suburbs[] = [
            '3352', 'Bungaree '
        ];
        $suburbs[] = [
            '3726', 'Bungeet '
        ];
        $suburbs[] = [
            '3357', 'Buninyong '
        ];
        $suburbs[] = [
            '3815', 'Bunyip '
        ];
        $suburbs[] = [
            '3121', 'Burnley '
        ];
        $suburbs[] = [
            '3023', 'Burnside '
        ];
        $suburbs[] = [
            '3709', 'Burrowye '
        ];
        $suburbs[] = [
            '3352', 'Burrumbeet '
        ];
        $suburbs[] = [
            '3125', 'Burwood '
        ];
        $suburbs[] = [
            '3151', 'Burwood East'
        ];
        $suburbs[] = [
            '3151', 'Burwood Heights'
        ];
        $suburbs[] = [
            '3281', 'Bushfield '
        ];
        $suburbs[] = [
            '3885', 'Butchers Ridge'
        ];
        $suburbs[] = [
            '3711', 'Buxton '
        ];
        $suburbs[] = [
            '3301', 'Byaduk '
        ];
        $suburbs[] = [
            '3762', 'Bylands '
        ];
        $suburbs[] = [
            '3617', 'Byrneside '
        ];
        $suburbs[] = [
            '3505', 'Cabarita '
        ];
        $suburbs[] = [
            '3889', 'Cabbage Tree Cree'
        ];
        $suburbs[] = [
            '3023', 'Cairnlea '
        ];
        $suburbs[] = [
            '3984', 'Caldermeade '
        ];
        $suburbs[] = [
            '3556', 'California Gully'
        ];
        $suburbs[] = [
            '3573', 'Calivil '
        ];
        $suburbs[] = [
            '3844', 'Callignee '
        ];
        $suburbs[] = [
            '3875', 'Calulu '
        ];
        $suburbs[] = [
            '3124', 'Camberwell '
        ];
        $suburbs[] = [
            '3126', 'Camberwell East'
        ];
        $suburbs[] = [
            '3124', 'Camberwell North'
        ];
        $suburbs[] = [
            '3124', 'Camberwell South'
        ];
        $suburbs[] = [
            '3124', 'Camberwell West'
        ];
        $suburbs[] = [
            '3352', 'Cambrian Hill'
        ];
        $suburbs[] = [
            '3061', 'Campbellfield '
        ];
        $suburbs[] = [
            '3381', 'Campbells Bridge'
        ];
        $suburbs[] = [
            '3451', 'Campbells Creek'
        ];
        $suburbs[] = [
            '3556', 'Campbells Forest'
        ];
        $suburbs[] = [
            '3364', 'Campbelltown '
        ];
        $suburbs[] = [
            '3260', 'Camperdown '
        ];
        $suburbs[] = [
            '3350', 'Canadian '
        ];
        $suburbs[] = [
            '3630', 'Caniambo '
        ];
        $suburbs[] = [
            '3890', 'Cann River'
        ];
        $suburbs[] = [
            '3540', 'Cannie '
        ];
        $suburbs[] = [
            '3977', 'Cannons Creek'
        ];
        $suburbs[] = [
            '3126', 'Canterbury '
        ];
        $suburbs[] = [
            '3351', 'Cape Clear'
        ];
        $suburbs[] = [
            '3995', 'Cape Paterson'
        ];
        $suburbs[] = [
            '3925', 'Cape Woolamai'
        ];
        $suburbs[] = [
            '3274', 'Caramut '
        ];
        $suburbs[] = [
            '3312', 'Carapook '
        ];
        $suburbs[] = [
            '3352', 'Cardigan '
        ];
        $suburbs[] = [
            '3978', 'Cardinia '
        ];
        $suburbs[] = [
            '3496', 'Cardross '
        ];
        $suburbs[] = [
            '3464', 'Carisbrook '
        ];
        $suburbs[] = [
            '3239', 'Carlisle River'
        ];
        $suburbs[] = [
            '3442', 'Carlsruhe '
        ];
        $suburbs[] = [
            '3053', 'Carlton '
        ];
        $suburbs[] = [
            '3054', 'Carlton North'
        ];
        $suburbs[] = [
            '3053', 'Carlton South'
        ];
        $suburbs[] = [
            '3163', 'Carnegie '
        ];
        $suburbs[] = [
            '3351', 'Carngham '
        ];
        $suburbs[] = [
            '3023', 'Caroline Springs'
        ];
        $suburbs[] = [
            '3844', 'Carrajung '
        ];
        $suburbs[] = [
            '3874', 'Carrajung South'
        ];
        $suburbs[] = [
            '3361', 'Carranballac '
        ];
        $suburbs[] = [
            '3197', 'Carrum '
        ];
        $suburbs[] = [
            '3201', 'Carrum Downs'
        ];
        $suburbs[] = [
            '3494', 'Carwarp '
        ];
        $suburbs[] = [
            '3311', 'Casterton '
        ];
        $suburbs[] = [
            '3450', 'Castlemaine '
        ];
        $suburbs[] = [
            '3981', 'Catani '
        ];
        $suburbs[] = [
            '3714', 'Cathkin '
        ];
        $suburbs[] = [
            '3162', 'Caulfield '
        ];
        $suburbs[] = [
            '3145', 'Caulfield East'
        ];
        $suburbs[] = [
            '3161', 'Caulfield Junction'
        ];
        $suburbs[] = [
            '3161', 'Caulfield North'
        ];
        $suburbs[] = [
            '3162', 'Caulfield South'
        ];
        $suburbs[] = [
            '3314', 'Cavendish '
        ];
        $suburbs[] = [
            '3145', 'Central Park'
        ];
        $suburbs[] = [
            '3221', 'Ceres '
        ];
        $suburbs[] = [
            '3148', 'Chadstone '
        ];
        $suburbs[] = [
            '3239', 'Chapple Vale'
        ];
        $suburbs[] = [
            '3695', 'Charleroi '
        ];
        $suburbs[] = [
            '3525', 'Charlton '
        ];
        $suburbs[] = [
            '3379', 'Chatsworth '
        ];
        $suburbs[] = [
            '3196', 'Chelsea '
        ];
        $suburbs[] = [
            '3196', 'Chelsea Heights'
        ];
        $suburbs[] = [
            '3192', 'Cheltenham '
        ];
        $suburbs[] = [
            '3192', 'Cheltenham East'
        ];
        $suburbs[] = [
            '3351', 'Chepstowe '
        ];
        $suburbs[] = [
            '3678', 'Cheshunt '
        ];
        $suburbs[] = [
            '3312', 'Chetwynd '
        ];
        $suburbs[] = [
            '3451', 'Chewton '
        ];
        $suburbs[] = [
            '3824', 'Childers '
        ];
        $suburbs[] = [
            '3683', 'Chiltern '
        ];
        $suburbs[] = [
            '3546', 'Chinkapook '
        ];
        $suburbs[] = [
            '3116', 'Chirnside Park'
        ];
        $suburbs[] = [
            '3775', 'Christmas Hills'
        ];
        $suburbs[] = [
            '3842', 'Churchill '
        ];
        $suburbs[] = [
            '3352', 'Clarendon '
        ];
        $suburbs[] = [
            '3169', 'Clarinda '
        ];
        $suburbs[] = [
            '3430', 'Clarkefield '
        ];
        $suburbs[] = [
            '3352', 'Clarkes Hill'
        ];
        $suburbs[] = [
            '3168', 'Clayton '
        ];
        $suburbs[] = [
            '3169', 'Clayton South'
        ];
        $suburbs[] = [
            '3782', 'Clematis '
        ];
        $suburbs[] = [
            '3068', 'Clifton Hill'
        ];
        $suburbs[] = [
            '3222', 'Clifton Springs'
        ];
        $suburbs[] = [
            '3658', 'Clonbinane '
        ];
        $suburbs[] = [
            '3889', 'Club Terrace'
        ];
        $suburbs[] = [
            '3370', 'Clunes '
        ];
        $suburbs[] = [
            '3978', 'Clyde '
        ];
        $suburbs[] = [
            '3825', 'Coalville '
        ];
        $suburbs[] = [
            '3165', 'Coatesville '
        ];
        $suburbs[] = [
            '3266', 'Cobden '
        ];
        $suburbs[] = [
            '3643', 'Cobram '
        ];
        $suburbs[] = [
            '3644', 'Cobram '
        ];
        $suburbs[] = [
            '3058', 'Coburg '
        ];
        $suburbs[] = [
            '3058', 'Coburg North'
        ];
        $suburbs[] = [
            '3781', 'Cockatoo '
        ];
        $suburbs[] = [
            '3364', 'Coghills Creek'
        ];
        $suburbs[] = [
            '3568', 'Cohuna '
        ];
        $suburbs[] = [
            '3340', 'Coimadai '
        ];
        $suburbs[] = [
            '3250', 'Colac '
        ];
        $suburbs[] = [
            '3707', 'Colac Colac'
        ];
        $suburbs[] = [
            '3559', 'Colbinabbin '
        ];
        $suburbs[] = [
            '3770', 'Coldstream '
        ];
        $suburbs[] = [
            '3315', 'Coleraine '
        ];
        $suburbs[] = [
            '3494', 'Colignan '
        ];
        $suburbs[] = [
            '3066', 'Collingwood '
        ];
        $suburbs[] = [
            '8003', 'Collins Street Eas'
        ];
        $suburbs[] = [
            '8007', 'Collins Street Wes'
        ];
        $suburbs[] = [
            '3630', 'Colliver '
        ];
        $suburbs[] = [
            '3889', 'Combienbar '
        ];
        $suburbs[] = [
            '3556', 'Comet Hill'
        ];
        $suburbs[] = [
            '3303', 'Condah '
        ];
        $suburbs[] = [
            '3633', 'Congupna '
        ];
        $suburbs[] = [
            '3227', 'Connewarre '
        ];
        $suburbs[] = [
            '3318', 'Connewirricoo '
        ];
        $suburbs[] = [
            '3048', 'Coolaroo '
        ];
        $suburbs[] = [
            '3616', 'Cooma '
        ];
        $suburbs[] = [
            '3629', 'Coomboona '
        ];
        $suburbs[] = [
            '3814', 'Cora Lynn'
        ];
        $suburbs[] = [
            '3480', 'Corack '
        ];
        $suburbs[] = [
            '3249', 'Coragulac '
        ];
        $suburbs[] = [
            '3352', 'Corindhap '
        ];
        $suburbs[] = [
            '3984', 'Corinella '
        ];
        $suburbs[] = [
            '3214', 'Corio '
        ];
        $suburbs[] = [
            '3984', 'Coronet Bay'
        ];
        $suburbs[] = [
            '3559', 'Corop '
        ];
        $suburbs[] = [
            '3254', 'Cororooke '
        ];
        $suburbs[] = [
            '3707', 'Corryong '
        ];
        $suburbs[] = [
            '3249', 'Corunnun '
        ];
        $suburbs[] = [
            '3631', 'Cosgrove '
        ];
        $suburbs[] = [
            '3523', 'Costerfield '
        ];
        $suburbs[] = [
            '3099', 'Cottles Bridge'
        ];
        $suburbs[] = [
            '3506', 'Cowangie '
        ];
        $suburbs[] = [
            '3922', 'Cowes '
        ];
        $suburbs[] = [
            '3857', 'Cowwarr '
        ];
        $suburbs[] = [
            '3465', 'Craigie '
        ];
        $suburbs[] = [
            '3064', 'Craigieburn '
        ];
        $suburbs[] = [
            '3977', 'Cranbourne '
        ];
        $suburbs[] = [
            '3977', 'Cranbourne North'
        ];
        $suburbs[] = [
            '3977', 'Cranbourne South'
        ];
        $suburbs[] = [
            '3669', 'Creek Junction'
        ];
        $suburbs[] = [
            '3666', 'Creighton '
        ];
        $suburbs[] = [
            '3121', 'Cremorne '
        ];
        $suburbs[] = [
            '3322', 'Cressy '
        ];
        $suburbs[] = [
            '3363', 'Creswick '
        ];
        $suburbs[] = [
            '3919', 'Crib Point'
        ];
        $suburbs[] = [
            '3193', 'Cromer '
        ];
        $suburbs[] = [
            '3377', 'Crowlands '
        ];
        $suburbs[] = [
            '3136', 'Croydon '
        ];
        $suburbs[] = [
            '3136', 'Croydon Hills'
        ];
        $suburbs[] = [
            '3136', 'Croydon North'
        ];
        $suburbs[] = [
            '3136', 'Croydon South'
        ];
        $suburbs[] = [
            '3265', 'Cudgee '
        ];
        $suburbs[] = [
            '3705', 'Cudgewa '
        ];
        $suburbs[] = [
            '3530', 'Culgoa '
        ];
        $suburbs[] = [
            '3496', 'Cullulleraine '
        ];
        $suburbs[] = [
            '3251', 'Cundare North'
        ];
        $suburbs[] = [
            '3268', 'Curdie Vale'
        ];
        $suburbs[] = [
            '3268', 'Curdies River'
        ];
        $suburbs[] = [
            '3222', 'Curlewis '
        ];
        $suburbs[] = [
            '3385', 'Dadswells Bridge'
        ];
        $suburbs[] = [
            '3465', 'Daisy Hill'
        ];
        $suburbs[] = [
            '3047', 'Dallas '
        ];
        $suburbs[] = [
            '3981', 'Dalmore '
        ];
        $suburbs[] = [
            '3992', 'Dalyston '
        ];
        $suburbs[] = [
            '3175', 'Dandenong '
        ];
        $suburbs[] = [
            '3164', 'Dandenong South'
        ];
        $suburbs[] = [
            '3175', 'Dandenong South'
        ];
        $suburbs[] = [
            '3737', 'Dandongadale '
        ];
        $suburbs[] = [
            '3862', 'Dargo '
        ];
        $suburbs[] = [
            '3871', 'Darlimurla '
        ];
        $suburbs[] = [
            '3145', 'Darling '
        ];
        $suburbs[] = [
            '3271', 'Darlington '
        ];
        $suburbs[] = [
            '3822', 'Darnum '
        ];
        $suburbs[] = [
            '3756', 'Darraweit Guim'
        ];
        $suburbs[] = [
            '3851', 'Darriman '
        ];
        $suburbs[] = [
            '3304', 'Dartmoor '
        ];
        $suburbs[] = [
            '3701', 'Dartmouth '
        ];
        $suburbs[] = [
            '3460', 'Daylesford '
        ];
        $suburbs[] = [
            '3217', 'Deakin University'
        ];
        $suburbs[] = [
            '3352', 'Dean '
        ];
        $suburbs[] = [
            '3235', 'Deans Marsh'
        ];
        $suburbs[] = [
            '3691', 'Dederang '
        ];
        $suburbs[] = [
            '3023', 'Deer Park'
        ];
        $suburbs[] = [
            '3022', 'Deer Park Eas'
        ];
        $suburbs[] = [
            '3356', 'Delacombe '
        ];
        $suburbs[] = [
            '3037', 'Delahey '
        ];
        $suburbs[] = [
            '3186', 'Dendy '
        ];
        $suburbs[] = [
            '3280', 'Dennington '
        ];
        $suburbs[] = [
            '3516', 'Derby '
        ];
        $suburbs[] = [
            '3352', 'Dereel '
        ];
        $suburbs[] = [
            '3312', 'Dergholm '
        ];
        $suburbs[] = [
            '3030', 'Derrimut '
        ];
        $suburbs[] = [
            '3325', 'Derrinallum '
        ];
        $suburbs[] = [
            '3726', 'Devenish '
        ];
        $suburbs[] = [
            '3977', 'Devon Meadows'
        ];
        $suburbs[] = [
            '3971', 'Devon North'
        ];
        $suburbs[] = [
            '3610', 'Dhurringile '
        ];
        $suburbs[] = [
            '3089', 'Diamond Creek'
        ];
        $suburbs[] = [
            '3309', 'Digby '
        ];
        $suburbs[] = [
            '3427', 'Diggers Rest'
        ];
        $suburbs[] = [
            '3414', 'Dimboola '
        ];
        $suburbs[] = [
            '3571', 'Dingee '
        ];
        $suburbs[] = [
            '3172', 'Dingley Village'
        ];
        $suburbs[] = [
            '3898', 'Dinner Plain'
        ];
        $suburbs[] = [
            '3775', 'Dixons Creek'
        ];
        $suburbs[] = [
            '3008', 'Docklands '
        ];
        $suburbs[] = [
            '3480', 'Donald '
        ];
        $suburbs[] = [
            '3108', 'Doncaster '
        ];
        $suburbs[] = [
            '3109', 'Doncaster East'
        ];
        $suburbs[] = [
            '3109', 'Doncaster Heights'
        ];
        $suburbs[] = [
            '3064', 'Donnybrook '
        ];
        $suburbs[] = [
            '3111', 'Donvale '
        ];
        $suburbs[] = [
            '3401', 'Dooen '
        ];
        $suburbs[] = [
            '3646', 'Dookie '
        ];
        $suburbs[] = [
            '3647', 'Dookie College'
        ];
        $suburbs[] = [
            '3754', 'Doreen '
        ];
        $suburbs[] = [
            '3401', 'Douglas '
        ];
        $suburbs[] = [
            '3177', 'Doveton '
        ];
        $suburbs[] = [
            '3249', 'Dreeite '
        ];
        $suburbs[] = [
            '3936', 'Dromana '
        ];
        $suburbs[] = [
            '3818', 'Drouin '
        ];
        $suburbs[] = [
            '3461', 'Drummond '
        ];
        $suburbs[] = [
            '3446', 'Drummond North'
        ];
        $suburbs[] = [
            '3222', 'Drysdale '
        ];
        $suburbs[] = [
            '3956', 'Dumbalk '
        ];
        $suburbs[] = [
            '3271', 'Dundonnell '
        ];
        $suburbs[] = [
            '3294', 'Dunkeld '
        ];
        $suburbs[] = [
            '3630', 'Dunkirk '
        ];
        $suburbs[] = [
            '3352', 'Dunnstown '
        ];
        $suburbs[] = [
            '3472', 'Dunolly '
        ];
        $suburbs[] = [
            '3352', 'Durham Lead'
        ];
        $suburbs[] = [
            '3576', 'Durham Ox'
        ];
        $suburbs[] = [
            '3323', 'Duverney '
        ];
        $suburbs[] = [
            '3878', 'Eagle Point'
        ];
        $suburbs[] = [
            '3556', 'Eaglehawk '
        ];
        $suburbs[] = [
            '3084', 'Eaglemont '
        ];
        $suburbs[] = [
            '3219', 'East Geelong'
        ];
        $suburbs[] = [
            '3002', 'East Melbourne'
        ];
        $suburbs[] = [
            '8002', 'East Melbourne'
        ];
        $suburbs[] = [
            '3852', 'East Sale Raa'
        ];
        $suburbs[] = [
            '3231', 'Eastern View'
        ];
        $suburbs[] = [
            '3691', 'Ebden '
        ];
        $suburbs[] = [
            '3564', 'Echuca '
        ];
        $suburbs[] = [
            '3472', 'Eddington '
        ];
        $suburbs[] = [
            '3757', 'Eden Park'
        ];
        $suburbs[] = [
            '3318', 'Edenhope '
        ];
        $suburbs[] = [
            '3196', 'Edithvale '
        ];
        $suburbs[] = [
            '3713', 'Eildon '
        ];
        $suburbs[] = [
            '3334', 'Elaine '
        ];
        $suburbs[] = [
            '3746', 'Eldorado '
        ];
        $suburbs[] = [
            '3265', 'Ellerslie '
        ];
        $suburbs[] = [
            '3250', 'Elliminyt '
        ];
        $suburbs[] = [
            '3469', 'Elmhurst '
        ];
        $suburbs[] = [
            '3558', 'Elmore '
        ];
        $suburbs[] = [
            '3448', 'Elphinstone '
        ];
        $suburbs[] = [
            '3185', 'Elsternwick '
        ];
        $suburbs[] = [
            '3095', 'Eltham '
        ];
        $suburbs[] = [
            '3095', 'Eltham North'
        ];
        $suburbs[] = [
            '3184', 'Elwood '
        ];
        $suburbs[] = [
            '3782', 'Emerald '
        ];
        $suburbs[] = [
            '3475', 'Emu '
        ];
        $suburbs[] = [
            '3802', 'Endeavour Hills'
        ];
        $suburbs[] = [
            '3352', 'Enfield '
        ];
        $suburbs[] = [
            '3895', 'Ensay '
        ];
        $suburbs[] = [
            '3551', 'Eppalock '
        ];
        $suburbs[] = [
            '3076', 'Epping '
        ];
        $suburbs[] = [
            '3076', 'Epping Dc'
        ];
        $suburbs[] = [
            '3551', 'Epsom '
        ];
        $suburbs[] = [
            '3825', 'Erica '
        ];
        $suburbs[] = [
            '3701', 'Eskdale '
        ];
        $suburbs[] = [
            '3040', 'Essendon '
        ];
        $suburbs[] = [
            '3041', 'Essendon North'
        ];
        $suburbs[] = [
            '3040', 'Essendon West'
        ];
        $suburbs[] = [
            '3350', 'Eureka '
        ];
        $suburbs[] = [
            '3666', 'Euroa '
        ];
        $suburbs[] = [
            '3739', 'Eurobin '
        ];
        $suburbs[] = [
            '3371', 'Evansford '
        ];
        $suburbs[] = [
            '3678', 'Everton '
        ];
        $suburbs[] = [
            '3338', 'Exford '
        ];
        $suburbs[] = [
            '3078', 'Fairfield '
        ];
        $suburbs[] = [
            '3231', 'Fairhaven '
        ];
        $suburbs[] = [
            '3699', 'Falls Creek'
        ];
        $suburbs[] = [
            '3060', 'Fawkner '
        ];
        $suburbs[] = [
            '3458', 'Fern Hill'
        ];
        $suburbs[] = [
            '3864', 'Fernbank '
        ];
        $suburbs[] = [
            '3518', 'Fernihurst '
        ];
        $suburbs[] = [
            '3156', 'Ferntree Gully'
        ];
        $suburbs[] = [
            '3786', 'Ferny Creek'
        ];
        $suburbs[] = [
            '3939', 'Fingal '
        ];
        $suburbs[] = [
            '3959', 'Fish Creek'
        ];
        $suburbs[] = [
            '3065', 'Fitzroy '
        ];
        $suburbs[] = [
            '3068', 'Fitzroy North'
        ];
        $suburbs[] = [
            '3977', 'Five Ways'
        ];
        $suburbs[] = [
            '3031', 'Flemington '
        ];
        $suburbs[] = [
            '3929', 'Flinders '
        ];
        $suburbs[] = [
            '8009', 'Flinders Lane'
        ];
        $suburbs[] = [
            '3717', 'Flowerdale '
        ];
        $suburbs[] = [
            '3844', 'Flynn '
        ];
        $suburbs[] = [
            '3011', 'Footscray '
        ];
        $suburbs[] = [
            '3131', 'Forest Hill'
        ];
        $suburbs[] = [
            '3236', 'Forrest '
        ];
        $suburbs[] = [
            '3960', 'Foster '
        ];
        $suburbs[] = [
            '3557', 'Fosterville '
        ];
        $suburbs[] = [
            '3805', 'Fountain Gate'
        ];
        $suburbs[] = [
            '3265', 'Framlingham '
        ];
        $suburbs[] = [
            '3461', 'Franklinford '
        ];
        $suburbs[] = [
            '3199', 'Frankston '
        ];
        $suburbs[] = [
            '3200', 'Frankston North'
        ];
        $suburbs[] = [
            '3741', 'Freeburgh '
        ];
        $suburbs[] = [
            '3216', 'Freshwater Creek'
        ];
        $suburbs[] = [
            '3451', 'Fryerstown '
        ];
        $suburbs[] = [
            '3221', 'Fyansford '
        ];
        $suburbs[] = [
            '3737', 'Gapsted '
        ];
        $suburbs[] = [
            '3207', 'Garden City'
        ];
        $suburbs[] = [
            '3185', 'Gardenvale '
        ];
        $suburbs[] = [
            '3814', 'Garfield '
        ];
        $suburbs[] = [
            '3265', 'Garvoc '
        ];
        $suburbs[] = [
            '3407', 'Gatum '
        ];
        $suburbs[] = [
            '3220', 'Geelong '
        ];
        $suburbs[] = [
            '3218', 'Geelong West'
        ];
        $suburbs[] = [
            '3885', 'Gelantipy '
        ];
        $suburbs[] = [
            '3239', 'Gellibrand '
        ];
        $suburbs[] = [
            '3237', 'Gellibrand Lower'
        ];
        $suburbs[] = [
            '3971', 'Gelliondale '
        ];
        $suburbs[] = [
            '3783', 'Gembrook '
        ];
        $suburbs[] = [
            '3891', 'Genoa '
        ];
        $suburbs[] = [
            '3418', 'Gerang Gerung'
        ];
        $suburbs[] = [
            '3243', 'Gerangamete '
        ];
        $suburbs[] = [
            '3331', 'Gheringhap '
        ];
        $suburbs[] = [
            '3797', 'Gilderoy '
        ];
        $suburbs[] = [
            '3616', 'Gillieston '
        ];
        $suburbs[] = [
            '3841', 'Gippsland Mc'
        ];
        $suburbs[] = [
            '3891', 'Gipsy Point'
        ];
        $suburbs[] = [
            '3624', 'Girgarre '
        ];
        $suburbs[] = [
            '3437', 'Gisborne '
        ];
        $suburbs[] = [
            '3043', 'Gladstone Park'
        ];
        $suburbs[] = [
            '3797', 'Gladysdale '
        ];
        $suburbs[] = [
            '3979', 'Glen Alvie'
        ];
        $suburbs[] = [
            '3691', 'Glen Creek'
        ];
        $suburbs[] = [
            '3990', 'Glen Forbes'
        ];
        $suburbs[] = [
            '3163', 'Glen Huntly'
        ];
        $suburbs[] = [
            '3146', 'Glen Iris'
        ];
        $suburbs[] = [
            '3150', 'Glen Waverley'
        ];
        $suburbs[] = [
            '3717', 'Glenburn '
        ];
        $suburbs[] = [
            '3266', 'Glenfyne '
        ];
        $suburbs[] = [
            '3854', 'Glengarry '
        ];
        $suburbs[] = [
            '3461', 'Glenlyon '
        ];
        $suburbs[] = [
            '3858', 'Glenmaggie '
        ];
        $suburbs[] = [
            '3340', 'Glenmore '
        ];
        $suburbs[] = [
            '3385', 'Glenorchy '
        ];
        $suburbs[] = [
            '3675', 'Glenrowan '
        ];
        $suburbs[] = [
            '3046', 'Glenroy '
        ];
        $suburbs[] = [
            '3293', 'Glenthompson '
        ];
        $suburbs[] = [
            '3221', 'Gnarwarre '
        ];
        $suburbs[] = [
            '3260', 'Gnotuk '
        ];
        $suburbs[] = [
            '3719', 'Gobur '
        ];
        $suburbs[] = [
            '3350', 'Golden Point'
        ];
        $suburbs[] = [
            '3451', 'Golden Point'
        ];
        $suburbs[] = [
            '3465', 'Golden Point'
        ];
        $suburbs[] = [
            '3555', 'Golden Square'
        ];
        $suburbs[] = [
            '3472', 'Goldsborough '
        ];
        $suburbs[] = [
            '3666', 'Gooram '
        ];
        $suburbs[] = [
            '3685', 'Gooramadda '
        ];
        $suburbs[] = [
            '3725', 'Goorambat '
        ];
        $suburbs[] = [
            '3557', 'Goornong '
        ];
        $suburbs[] = [
            '3305', 'Gorae '
        ];
        $suburbs[] = [
            '3345', 'Gordon '
        ];
        $suburbs[] = [
            '3873', 'Gormandale '
        ];
        $suburbs[] = [
            '3412', 'Goroke '
        ];
        $suburbs[] = [
            '3723', 'Goughs Bay'
        ];
        $suburbs[] = [
            '3608', 'Goulburn Weir'
        ];
        $suburbs[] = [
            '3043', 'Gowanbrae '
        ];
        $suburbs[] = [
            '3669', 'Gowangardie '
        ];
        $suburbs[] = [
            '3984', 'Grantville '
        ];
        $suburbs[] = [
            '3701', 'Granya '
        ];
        $suburbs[] = [
            '3281', 'Grassmere '
        ];
        $suburbs[] = [
            '3608', 'Graytown '
        ];
        $suburbs[] = [
            '3377', 'Great Western'
        ];
        $suburbs[] = [
            '3537', 'Gredgwin '
        ];
        $suburbs[] = [
            '3341', 'Greendale '
        ];
        $suburbs[] = [
            '3088', 'Greensborough '
        ];
        $suburbs[] = [
            '3059', 'Greenvale '
        ];
        $suburbs[] = [
            '3675', 'Greta '
        ];
        $suburbs[] = [
            '3216', 'Grovedale '
        ];
        $suburbs[] = [
            '3770', 'Gruyere '
        ];
        $suburbs[] = [
            '3451', 'Guildford '
        ];
        $suburbs[] = [
            '3566', 'Gunbower '
        ];
        $suburbs[] = [
            '3691', 'Gundowring '
        ];
        $suburbs[] = [
            '3850', 'Guthridge '
        ];
        $suburbs[] = [
            '3709', 'Guys Forest'
        ];
        $suburbs[] = [
            '3807', 'Guys Hill'
        ];
        $suburbs[] = [
            '3401', 'Gymbowen '
        ];
        $suburbs[] = [
            '3351', 'Haddon '
        ];
        $suburbs[] = [
            '3046', 'Hadfield '
        ];
        $suburbs[] = [
            '3803', 'Hallam '
        ];
        $suburbs[] = [
            '3381', 'Halls Gap'
        ];
        $suburbs[] = [
            '3953', 'Hallston '
        ];
        $suburbs[] = [
            '3300', 'Hamilton '
        ];
        $suburbs[] = [
            '3215', 'Hamlyn Heights'
        ];
        $suburbs[] = [
            '3188', 'Hampton '
        ];
        $suburbs[] = [
            '3188', 'Hampton East'
        ];
        $suburbs[] = [
            '3188', 'Hampton North'
        ];
        $suburbs[] = [
            '3976', 'Hampton Park'
        ];
        $suburbs[] = [
            '3675', 'Hansonville '
        ];
        $suburbs[] = [
            '3453', 'Harcourt '
        ];
        $suburbs[] = [
            '3806', 'Harkaway '
        ];
        $suburbs[] = [
            '3741', 'Harrietville '
        ];
        $suburbs[] = [
            '3317', 'Harrow '
        ];
        $suburbs[] = [
            '3616', 'Harston '
        ];
        $suburbs[] = [
            '3915', 'Hastings '
        ];
        $suburbs[] = [
            '3287', 'Hawkesdale '
        ];
        $suburbs[] = [
            '3142', 'Hawksburn '
        ];
        $suburbs[] = [
            '3122', 'Hawthorn '
        ];
        $suburbs[] = [
            '3123', 'Hawthorn East'
        ];
        $suburbs[] = [
            '3658', 'Hazeldene '
        ];
        $suburbs[] = [
            '3777', 'Healesville '
        ];
        $suburbs[] = [
            '3981', 'Heath Hill'
        ];
        $suburbs[] = [
            '3523', 'Heathcote '
        ];
        $suburbs[] = [
            '3758', 'Heathcote Junction'
        ];
        $suburbs[] = [
            '3202', 'Heatherton '
        ];
        $suburbs[] = [
            '3135', 'Heathmont '
        ];
        $suburbs[] = [
            '3967', 'Hedley '
        ];
        $suburbs[] = [
            '3084', 'Heidelberg '
        ];
        $suburbs[] = [
            '3081', 'Heidelberg Heights'
        ];
        $suburbs[] = [
            '3081', 'Heidelberg Rgh'
        ];
        $suburbs[] = [
            '3081', 'Heidelberg West'
        ];
        $suburbs[] = [
            '3312', 'Henty '
        ];
        $suburbs[] = [
            '3461', 'Hepburn Springs'
        ];
        $suburbs[] = [
            '3218', 'Herne Hill'
        ];
        $suburbs[] = [
            '3825', 'Hernes Oak'
        ];
        $suburbs[] = [
            '3442', 'Hesket '
        ];
        $suburbs[] = [
            '3273', 'Hexham '
        ];
        $suburbs[] = [
            '3858', 'Heyfield '
        ];
        $suburbs[] = [
            '3304', 'Heywood '
        ];
        $suburbs[] = [
            '3756', 'Hidden Valley'
        ];
        $suburbs[] = [
            '3190', 'Highett '
        ];
        $suburbs[] = [
            '3032', 'Highpoint City'
        ];
        $suburbs[] = [
            '3216', 'Highton '
        ];
        $suburbs[] = [
            '3825', 'Hill End'
        ];
        $suburbs[] = [
            '3351', 'Hillcrest '
        ];
        $suburbs[] = [
            '3037', 'Hillside '
        ];
        $suburbs[] = [
            '3875', 'Hillside '
        ];
        $suburbs[] = [
            '3920', 'Hmas Cerberus'
        ];
        $suburbs[] = [
            '3139', 'Hoddles Creek'
        ];
        $suburbs[] = [
            '3148', 'Holmesglen '
        ];
        $suburbs[] = [
            '3717', 'Homewood '
        ];
        $suburbs[] = [
            '3396', 'Hopetoun '
        ];
        $suburbs[] = [
            '3162', 'Hopetoun Gardens'
        ];
        $suburbs[] = [
            '3029', 'Hoppers Crossing'
        ];
        $suburbs[] = [
            '3238', 'Hordern Vale'
        ];
        $suburbs[] = [
            '3400', 'Horsham '
        ];
        $suburbs[] = [
            '3402', 'Horsham '
        ];
        $suburbs[] = [
            '3741', 'Hotham Heights'
        ];
        $suburbs[] = [
            '3051', 'Hotham Hill'
        ];
        $suburbs[] = [
            '3128', 'Houston '
        ];
        $suburbs[] = [
            '3166', 'Hughesdale '
        ];
        $suburbs[] = [
            '3691', 'Hume Weir'
        ];
        $suburbs[] = [
            '3757', 'Humevale '
        ];
        $suburbs[] = [
            '3558', 'Hunter '
        ];
        $suburbs[] = [
            '3166', 'Huntingdale '
        ];
        $suburbs[] = [
            '3551', 'Huntly '
        ];
        $suburbs[] = [
            '3695', 'Huon '
        ];
        $suburbs[] = [
            '3099', 'Hurstbridge '
        ];
        $suburbs[] = [
            '3351', 'Illabarook '
        ];
        $suburbs[] = [
            '3282', 'Illowa '
        ];
        $suburbs[] = [
            '3223', 'Indented Head'
        ];
        $suburbs[] = [
            '3517', 'Inglewood '
        ];
        $suburbs[] = [
            '3472', 'Inkerman '
        ];
        $suburbs[] = [
            '3636', 'Invergordon '
        ];
        $suburbs[] = [
            '3634', 'Invergordon South'
        ];
        $suburbs[] = [
            '3321', 'Inverleigh '
        ];
        $suburbs[] = [
            '3996', 'Inverloch '
        ];
        $suburbs[] = [
            '3352', 'Invermay '
        ];
        $suburbs[] = [
            '3815', 'Iona '
        ];
        $suburbs[] = [
            '3249', 'Irrewarra '
        ];
        $suburbs[] = [
            '3498', 'Irymple '
        ];
        $suburbs[] = [
            '3079', 'Ivanhoe '
        ];
        $suburbs[] = [
            '3079', 'Ivanhoe East'
        ];
        $suburbs[] = [
            '3047', 'Jacana '
        ];
        $suburbs[] = [
            '3984', 'Jam Jerrup'
        ];
        $suburbs[] = [
            '3723', 'Jamieson '
        ];
        $suburbs[] = [
            '3228', 'Jan Juc'
        ];
        $suburbs[] = [
            '3266', 'Jancourt '
        ];
        $suburbs[] = [
            '3266', 'Jancourt East'
        ];
        $suburbs[] = [
            '3517', 'Jarklin '
        ];
        $suburbs[] = [
            '3840', 'Jeeralang '
        ];
        $suburbs[] = [
            '3945', 'Jeetho '
        ];
        $suburbs[] = [
            '3423', 'Jeparit '
        ];
        $suburbs[] = [
            '3238', 'Johanna '
        ];
        $suburbs[] = [
            '3902', 'Johnsonville '
        ];
        $suburbs[] = [
            '3869', 'Jumbuk '
        ];
        $suburbs[] = [
            '3951', 'Jumbunna '
        ];
        $suburbs[] = [
            '3399', 'Jung '
        ];
        $suburbs[] = [
            '3551', 'Junortoun '
        ];
        $suburbs[] = [
            '3909', 'Kalimna '
        ];
        $suburbs[] = [
            '3064', 'Kalkallo '
        ];
        $suburbs[] = [
            '3791', 'Kallista '
        ];
        $suburbs[] = [
            '3766', 'Kalorama '
        ];
        $suburbs[] = [
            '3555', 'Kangaroo Flat'
        ];
        $suburbs[] = [
            '3097', 'Kangaroo Ground'
        ];
        $suburbs[] = [
            '3419', 'Kaniva '
        ];
        $suburbs[] = [
            '3719', 'Kanumbra '
        ];
        $suburbs[] = [
            '3564', 'Kanyapella '
        ];
        $suburbs[] = [
            '3951', 'Kardella '
        ];
        $suburbs[] = [
            '3199', 'Karingal '
        ];
        $suburbs[] = [
            '3401', 'Karnak '
        ];
        $suburbs[] = [
            '3649', 'Katamatite '
        ];
        $suburbs[] = [
            '3634', 'Katandra '
        ];
        $suburbs[] = [
            '3640', 'Katunga '
        ];
        $suburbs[] = [
            '3249', 'Kawarren '
        ];
        $suburbs[] = [
            '3021', 'Kealba '
        ];
        $suburbs[] = [
            '3036', 'Keilor '
        ];
        $suburbs[] = [
            '3038', 'Keilor Downs'
        ];
        $suburbs[] = [
            '3033', 'Keilor East'
        ];
        $suburbs[] = [
            '3036', 'Keilor North'
        ];
        $suburbs[] = [
            '3042', 'Keilor Park'
        ];
        $suburbs[] = [
            '3239', 'Kennedys Creek'
        ];
        $suburbs[] = [
            '3221', 'Kennett River'
        ];
        $suburbs[] = [
            '3550', 'Kennington '
        ];
        $suburbs[] = [
            '3031', 'Kensington '
        ];
        $suburbs[] = [
            '3073', 'Keon Park'
        ];
        $suburbs[] = [
            '3579', 'Kerang '
        ];
        $suburbs[] = [
            '3691', 'Kergunyah '
        ];
        $suburbs[] = [
            '3979', 'Kernot '
        ];
        $suburbs[] = [
            '3434', 'Kerrie '
        ];
        $suburbs[] = [
            '3129', 'Kerrimuir '
        ];
        $suburbs[] = [
            '3660', 'Kerrisdale '
        ];
        $suburbs[] = [
            '3101', 'Kew '
        ];
        $suburbs[] = [
            '3102', 'Kew East'
        ];
        $suburbs[] = [
            '3173', 'Keysborough '
        ];
        $suburbs[] = [
            '3631', 'Kialla '
        ];
        $suburbs[] = [
            '3631', 'Kialla East'
        ];
        $suburbs[] = [
            '3631', 'Kialla West'
        ];
        $suburbs[] = [
            '3418', 'Kiata '
        ];
        $suburbs[] = [
            '3691', 'Kiewa '
        ];
        $suburbs[] = [
            '3995', 'Kilcunda '
        ];
        $suburbs[] = [
            '3283', 'Killarney '
        ];
        $suburbs[] = [
            '3851', 'Kilmany '
        ];
        $suburbs[] = [
            '3764', 'Kilmore '
        ];
        $suburbs[] = [
            '3137', 'Kilsyth '
        ];
        $suburbs[] = [
            '3137', 'Kilsyth South'
        ];
        $suburbs[] = [
            '3763', 'Kinglake '
        ];
        $suburbs[] = [
            '3757', 'Kinglake West'
        ];
        $suburbs[] = [
            '3021', 'Kings Park'
        ];
        $suburbs[] = [
            '3083', 'Kingsbury '
        ];
        $suburbs[] = [
            '3364', 'Kingston '
        ];
        $suburbs[] = [
            '3012', 'Kingsville '
        ];
        $suburbs[] = [
            '3283', 'Kirkstall '
        ];
        $suburbs[] = [
            '3666', 'Kithbrook '
        ];
        $suburbs[] = [
            '3523', 'Knowsley '
        ];
        $suburbs[] = [
            '3152', 'Knox City Centr'
        ];
        $suburbs[] = [
            '3180', 'Knoxfield '
        ];
        $suburbs[] = [
            '3704', 'Koetong '
        ];
        $suburbs[] = [
            '3265', 'Kolora '
        ];
        $suburbs[] = [
            '3951', 'Kongwak '
        ];
        $suburbs[] = [
            '3981', 'Koo Wee Ru'
        ];
        $suburbs[] = [
            '3669', 'Koonda '
        ];
        $suburbs[] = [
            '3580', 'Koondrook '
        ];
        $suburbs[] = [
            '3954', 'Koonwarra '
        ];
        $suburbs[] = [
            '3501', 'Koorlong '
        ];
        $suburbs[] = [
            '3844', 'Koornalla '
        ];
        $suburbs[] = [
            '3144', 'Kooyong '
        ];
        $suburbs[] = [
            '3714', 'Koriella '
        ];
        $suburbs[] = [
            '3282', 'Koroit '
        ];
        $suburbs[] = [
            '3520', 'Korong Vale'
        ];
        $suburbs[] = [
            '3950', 'Korumburra '
        ];
        $suburbs[] = [
            '3461', 'Korweinguboora '
        ];
        $suburbs[] = [
            '3565', 'Kotta '
        ];
        $suburbs[] = [
            '3638', 'Kotupna '
        ];
        $suburbs[] = [
            '3622', 'Koyuga '
        ];
        $suburbs[] = [
            '3621', 'Koyuga South'
        ];
        $suburbs[] = [
            '3945', 'Krowera '
        ];
        $suburbs[] = [
            '3930', 'Kunyung '
        ];
        $suburbs[] = [
            '3337', 'Kurunjang '
        ];
        $suburbs[] = [
            '3619', 'Kyabram '
        ];
        $suburbs[] = [
            '3620', 'Kyabram '
        ];
        $suburbs[] = [
            '3444', 'Kyneton '
        ];
        $suburbs[] = [
            '3463', 'Laanecoorie '
        ];
        $suburbs[] = [
            '3816', 'Labertouche '
        ];
        $suburbs[] = [
            '3130', 'Laburnum '
        ];
        $suburbs[] = [
            '3584', 'Lake Boga'
        ];
        $suburbs[] = [
            '3351', 'Lake Bolac'
        ];
        $suburbs[] = [
            '3581', 'Lake Charm'
        ];
        $suburbs[] = [
            '3312', 'Lake Mundi'
        ];
        $suburbs[] = [
            '3727', 'Lake Rowan'
        ];
        $suburbs[] = [
            '3887', 'Lake Tyers'
        ];
        $suburbs[] = [
            '3909', 'Lake Tyers Beac'
        ];
        $suburbs[] = [
            '3350', 'Lake Wendouree'
        ];
        $suburbs[] = [
            '3909', 'Lakes Entrance'
        ];
        $suburbs[] = [
            '3352', 'Lal Lal'
        ];
        $suburbs[] = [
            '3542', 'Lalbert '
        ];
        $suburbs[] = [
            '3075', 'Lalor '
        ];
        $suburbs[] = [
            '3620', 'Lancaster '
        ];
        $suburbs[] = [
            '3435', 'Lancefield '
        ];
        $suburbs[] = [
            '3384', 'Landsborough '
        ];
        $suburbs[] = [
            '3984', 'Lang Lang'
        ];
        $suburbs[] = [
            '3318', 'Langkoop '
        ];
        $suburbs[] = [
            '3910', 'Langwarrin '
        ];
        $suburbs[] = [
            '3212', 'Lara '
        ];
        $suburbs[] = [
            '3249', 'Larpent '
        ];
        $suburbs[] = [
            '3487', 'Lascelles '
        ];
        $suburbs[] = [
            '3139', 'Launching Place'
        ];
        $suburbs[] = [
            '3238', 'Lavers Hill'
        ];
        $suburbs[] = [
            '3028', 'Laverton '
        ];
        $suburbs[] = [
            '3026', 'Laverton North'
        ];
        $suburbs[] = [
            '8010', 'Law Courts'
        ];
        $suburbs[] = [
            '3415', 'Lawloit '
        ];
        $suburbs[] = [
            '3352', 'Learmonth '
        ];
        $suburbs[] = [
            '3516', 'Leichardt '
        ];
        $suburbs[] = [
            '3352', 'Leigh Creek'
        ];
        $suburbs[] = [
            '3567', 'Leitchville '
        ];
        $suburbs[] = [
            '3631', 'Lemnos '
        ];
        $suburbs[] = [
            '3691', 'Leneva '
        ];
        $suburbs[] = [
            '3953', 'Leongatha '
        ];
        $suburbs[] = [
            '3224', 'Leopold '
        ];
        $suburbs[] = [
            '3458', 'Lerderderg '
        ];
        $suburbs[] = [
            '3332', 'Lethbridge '
        ];
        $suburbs[] = [
            '3352', 'Lexton '
        ];
        $suburbs[] = [
            '3858', 'Licola '
        ];
        $suburbs[] = [
            '3420', 'Lillimur '
        ];
        $suburbs[] = [
            '3140', 'Lilydale '
        ];
        $suburbs[] = [
            '3673', 'Lima '
        ];
        $suburbs[] = [
            '3865', 'Lindenow '
        ];
        $suburbs[] = [
            '3875', 'Lindenow South'
        ];
        $suburbs[] = [
            '3360', 'Linton '
        ];
        $suburbs[] = [
            '3324', 'Lismore '
        ];
        $suburbs[] = [
            '3480', 'Litchfield '
        ];
        $suburbs[] = [
            '3211', 'Little River'
        ];
        $suburbs[] = [
            '3551', 'Llanelly '
        ];
        $suburbs[] = [
            '3945', 'Loch '
        ];
        $suburbs[] = [
            '3851', 'Loch Sport'
        ];
        $suburbs[] = [
            '3563', 'Lockington '
        ];
        $suburbs[] = [
            '3665', 'Locksley '
        ];
        $suburbs[] = [
            '3551', 'Lockwood South'
        ];
        $suburbs[] = [
            '3475', 'Logan '
        ];
        $suburbs[] = [
            '3691', 'Lone Pine'
        ];
        $suburbs[] = [
            '3550', 'Long Gully'
        ];
        $suburbs[] = [
            '3851', 'Longford '
        ];
        $suburbs[] = [
            '3551', 'Longlea '
        ];
        $suburbs[] = [
            '3816', 'Longwarry '
        ];
        $suburbs[] = [
            '3665', 'Longwood '
        ];
        $suburbs[] = [
            '3232', 'Lorne '
        ];
        $suburbs[] = [
            '3221', 'Lovely Banks'
        ];
        $suburbs[] = [
            '3093', 'Lower Plenty'
        ];
        $suburbs[] = [
            '3381', 'Lubeck '
        ];
        $suburbs[] = [
            '3875', 'Lucknow '
        ];
        $suburbs[] = [
            '3691', 'Lucyvale '
        ];
        $suburbs[] = [
            '3975', 'Lynbrook '
        ];
        $suburbs[] = [
            '3975', 'Lyndhurst '
        ];
        $suburbs[] = [
            '3461', 'Lyonville '
        ];
        $suburbs[] = [
            '3156', 'Lysterfield '
        ];
        $suburbs[] = [
            '3286', 'Macarthur '
        ];
        $suburbs[] = [
            '3782', 'Macclesfield '
        ];
        $suburbs[] = [
            '3440', 'Macedon '
        ];
        $suburbs[] = [
            '3971', 'Macks Creek'
        ];
        $suburbs[] = [
            '3085', 'Macleod '
        ];
        $suburbs[] = [
            '3579', 'Macorna '
        ];
        $suburbs[] = [
            '3860', 'Maffra '
        ];
        $suburbs[] = [
            '3352', 'Magpie '
        ];
        $suburbs[] = [
            '3551', 'Maiden Gully'
        ];
        $suburbs[] = [
            '3012', 'Maidstone '
        ];
        $suburbs[] = [
            '3275', 'Mailer Flat'
        ];
        $suburbs[] = [
            '3928', 'Main Ridge'
        ];
        $suburbs[] = [
            '3465', 'Majorca '
        ];
        $suburbs[] = [
            '3463', 'Maldon '
        ];
        $suburbs[] = [
            '3892', 'Mallacoota '
        ];
        $suburbs[] = [
            '3446', 'Malmsbury '
        ];
        $suburbs[] = [
            '3144', 'Malvern '
        ];
        $suburbs[] = [
            '3145', 'Malvern East'
        ];
        $suburbs[] = [
            '3546', 'Manangatang '
        ];
        $suburbs[] = [
            '3551', 'Mandurang '
        ];
        $suburbs[] = [
            '3663', 'Mangalore '
        ];
        $suburbs[] = [
            '3218', 'Manifold Heights'
        ];
        $suburbs[] = [
            '3222', 'Mannerim '
        ];
        $suburbs[] = [
            '3722', 'Mansfield '
        ];
        $suburbs[] = [
            '3724', 'Mansfield '
        ];
        $suburbs[] = [
            '3222', 'Marcus Hill'
        ];
        $suburbs[] = [
            '3032', 'Maribyrnong '
        ];
        $suburbs[] = [
            '3888', 'Marlo '
        ];
        $suburbs[] = [
            '3387', 'Marnoo '
        ];
        $suburbs[] = [
            '3515', 'Marong '
        ];
        $suburbs[] = [
            '3377', 'Maroona '
        ];
        $suburbs[] = [
            '3216', 'Marshall '
        ];
        $suburbs[] = [
            '3634', 'Marungi '
        ];
        $suburbs[] = [
            '3465', 'Maryborough '
        ];
        $suburbs[] = [
            '3812', 'Maryknoll '
        ];
        $suburbs[] = [
            '3779', 'Marysville '
        ];
        $suburbs[] = [
            '3723', 'Matlock '
        ];
        $suburbs[] = [
            '3331', 'Maude '
        ];
        $suburbs[] = [
            '3938', 'Mccrae '
        ];
        $suburbs[] = [
            '3204', 'Mckinnon '
        ];
        $suburbs[] = [
            '3799', 'Mcmahons Creek'
        ];
        $suburbs[] = [
            '3048', 'Meadow Heights'
        ];
        $suburbs[] = [
            '3956', 'Meeniyan '
        ];
        $suburbs[] = [
            '3862', 'Meerlieu '
        ];
        $suburbs[] = [
            '3000', 'Melbourne '
        ];
        $suburbs[] = [
            '3001', 'Melbourne '
        ];
        $suburbs[] = [
            '8001', 'Melbourne '
        ];
        $suburbs[] = [
            '3045', 'Melbourne Airport'
        ];
        $suburbs[] = [
            '3052', 'Melbourne University'
        ];
        $suburbs[] = [
            '3337', 'Melton '
        ];
        $suburbs[] = [
            '3338', 'Melton South'
        ];
        $suburbs[] = [
            '3315', 'Melville Forest'
        ];
        $suburbs[] = [
            '3194', 'Mentone '
        ];
        $suburbs[] = [
            '3159', 'Menzies Creek'
        ];
        $suburbs[] = [
            '3277', 'Mepunga '
        ];
        $suburbs[] = [
            '3505', 'Merbein '
        ];
        $suburbs[] = [
            '3333', 'Meredith '
        ];
        $suburbs[] = [
            '3496', 'Meringur '
        ];
        $suburbs[] = [
            '3310', 'Merino '
        ];
        $suburbs[] = [
            '3058', 'Merlynston '
        ];
        $suburbs[] = [
            '3754', 'Mernda '
        ];
        $suburbs[] = [
            '3916', 'Merricks '
        ];
        $suburbs[] = [
            '3926', 'Merricks Beach'
        ];
        $suburbs[] = [
            '3926', 'Merricks North'
        ];
        $suburbs[] = [
            '3618', 'Merrigum '
        ];
        $suburbs[] = [
            '3723', 'Merrijig '
        ];
        $suburbs[] = [
            '3715', 'Merton '
        ];
        $suburbs[] = [
            '3448', 'Metcalfe '
        ];
        $suburbs[] = [
            '3904', 'Metung '
        ];
        $suburbs[] = [
            '3444', 'Mia Mia'
        ];
        $suburbs[] = [
            '3064', 'Mickleham '
        ];
        $suburbs[] = [
            '3840', 'Mid Valley'
        ];
        $suburbs[] = [
            '3124', 'Middle Camberwell'
        ];
        $suburbs[] = [
            '3206', 'Middle Park'
        ];
        $suburbs[] = [
            '3678', 'Milawa '
        ];
        $suburbs[] = [
            '3500', 'Mildura  Victori'
        ];
        $suburbs[] = [
            '3502', 'Mildura '
        ];
        $suburbs[] = [
            '3501', 'Mildura Centre Plaz'
        ];
        $suburbs[] = [
            '3082', 'Mill Park'
        ];
        $suburbs[] = [
            '3352', 'Millbrook '
        ];
        $suburbs[] = [
            '3799', 'Millgrove '
        ];
        $suburbs[] = [
            '3572', 'Milloo '
        ];
        $suburbs[] = [
            '3575', 'Mincha '
        ];
        $suburbs[] = [
            '3567', 'Mincha West'
        ];
        $suburbs[] = [
            '3352', 'Miners Rest'
        ];
        $suburbs[] = [
            '3287', 'Minhamite '
        ];
        $suburbs[] = [
            '3413', 'Minimay '
        ];
        $suburbs[] = [
            '3351', 'Mininera '
        ];
        $suburbs[] = [
            '3392', 'Minyip '
        ];
        $suburbs[] = [
            '3415', 'Miram '
        ];
        $suburbs[] = [
            '3871', 'Mirboo North'
        ];
        $suburbs[] = [
            '3722', 'Mirimbah '
        ];
        $suburbs[] = [
            '3132', 'Mitcham '
        ];
        $suburbs[] = [
            '3352', 'Mitchell Park'
        ];
        $suburbs[] = [
            '3355', 'Mitchell Park'
        ];
        $suburbs[] = [
            '3573', 'Mitiamo '
        ];
        $suburbs[] = [
            '3401', 'Mitre '
        ];
        $suburbs[] = [
            '3701', 'Mitta Mitta'
        ];
        $suburbs[] = [
            '3816', 'Modella '
        ];
        $suburbs[] = [
            '3240', 'Modewarre '
        ];
        $suburbs[] = [
            '3825', 'Moe '
        ];
        $suburbs[] = [
            '3231', 'Moggs Creek'
        ];
        $suburbs[] = [
            '3718', 'Molesworth '
        ];
        $suburbs[] = [
            '3472', 'Moliagul '
        ];
        $suburbs[] = [
            '3352', 'Mollongghip '
        ];
        $suburbs[] = [
            '3673', 'Molyullah '
        ];
        $suburbs[] = [
            '3800', 'Monash University'
        ];
        $suburbs[] = [
            '3793', 'Monbulk '
        ];
        $suburbs[] = [
            '3984', 'Monomeith '
        ];
        $suburbs[] = [
            '3127', 'Mont Albert'
        ];
        $suburbs[] = [
            '3129', 'Mont Albert Nort'
        ];
        $suburbs[] = [
            '3094', 'Montmorency '
        ];
        $suburbs[] = [
            '3765', 'Montrose '
        ];
        $suburbs[] = [
            '3221', 'Moolap '
        ];
        $suburbs[] = [
            '3478', 'Moonambel '
        ];
        $suburbs[] = [
            '3825', 'Moondarra '
        ];
        $suburbs[] = [
            '3039', 'Moonee Ponds'
        ];
        $suburbs[] = [
            '3189', 'Moorabbin '
        ];
        $suburbs[] = [
            '3194', 'Moorabbin Airport'
        ];
        $suburbs[] = [
            '3189', 'Moorabbin East'
        ];
        $suburbs[] = [
            '3221', 'Moorabool '
        ];
        $suburbs[] = [
            '3933', 'Moorooduc '
        ];
        $suburbs[] = [
            '3138', 'Mooroolbark '
        ];
        $suburbs[] = [
            '3629', 'Mooroopna '
        ];
        $suburbs[] = [
            '3195', 'Mordialloc '
        ];
        $suburbs[] = [
            '3058', 'Moreland '
        ];
        $suburbs[] = [
            '3240', 'Moriac '
        ];
        $suburbs[] = [
            '3931', 'Mornington '
        ];
        $suburbs[] = [
            '3334', 'Morrisons '
        ];
        $suburbs[] = [
            '3272', 'Mortlake '
        ];
        $suburbs[] = [
            '3840', 'Morwell '
        ];
        $suburbs[] = [
            '3885', 'Mossiface '
        ];
        $suburbs[] = [
            '3691', 'Mount Alfred'
        ];
        $suburbs[] = [
            '3699', 'Mount Beauty'
        ];
        $suburbs[] = [
            '3960', 'Mount Best'
        ];
        $suburbs[] = [
            '3740', 'Mount Buffalo'
        ];
        $suburbs[] = [
            '3723', 'Mount Buller'
        ];
        $suburbs[] = [
            '3350', 'Mount Clear'
        ];
        $suburbs[] = [
            '3024', 'Mount Cottrell'
        ];
        $suburbs[] = [
            '3767', 'Mount Dandenong'
        ];
        $suburbs[] = [
            '3216', 'Mount Duneed'
        ];
        $suburbs[] = [
            '3352', 'Mount Egerton'
        ];
        $suburbs[] = [
            '3930', 'Mount Eliza'
        ];
        $suburbs[] = [
            '3796', 'Mount Evelyn'
        ];
        $suburbs[] = [
            '3350', 'Mount Helen'
        ];
        $suburbs[] = [
            '3741', 'Mount Hotham'
        ];
        $suburbs[] = [
            '3377', 'Mount Lonarch'
        ];
        $suburbs[] = [
            '3441', 'Mount Macedon'
        ];
        $suburbs[] = [
            '3934', 'Mount Martha'
        ];
        $suburbs[] = [
            '3240', 'Mount Moriac'
        ];
        $suburbs[] = [
            '3350', 'Mount Pleasant'
        ];
        $suburbs[] = [
            '3352', 'Mount Rowan'
        ];
        $suburbs[] = [
            '3875', 'Mount Taylor'
        ];
        $suburbs[] = [
            '3342', 'Mount Wallace'
        ];
        $suburbs[] = [
            '3149', 'Mount Waverley'
        ];
        $suburbs[] = [
            '3156', 'Mountain Gate'
        ];
        $suburbs[] = [
            '3294', 'Moutajup '
        ];
        $suburbs[] = [
            '3732', 'Moyhu '
        ];
        $suburbs[] = [
            '3377', 'Moyston '
        ];
        $suburbs[] = [
            '3451', 'Muckleford '
        ];
        $suburbs[] = [
            '3462', 'Muckleford South'
        ];
        $suburbs[] = [
            '3737', 'Mudgegonga '
        ];
        $suburbs[] = [
            '3170', 'Mulgrave '
        ];
        $suburbs[] = [
            '3610', 'Murchison '
        ];
        $suburbs[] = [
            '3221', 'Murgheboluc '
        ];
        $suburbs[] = [
            '3747', 'Murmungee '
        ];
        $suburbs[] = [
            '3579', 'Murrabit '
        ];
        $suburbs[] = [
            '3512', 'Murrayville '
        ];
        $suburbs[] = [
            '3717', 'Murrindindi '
        ];
        $suburbs[] = [
            '3243', 'Murroon '
        ];
        $suburbs[] = [
            '3163', 'Murrumbeena '
        ];
        $suburbs[] = [
            '3390', 'Murtoa '
        ];
        $suburbs[] = [
            '3461', 'Musk '
        ];
        $suburbs[] = [
            '3556', 'Myers Flat'
        ];
        $suburbs[] = [
            '3341', 'Myrniong '
        ];
        $suburbs[] = [
            '3851', 'Myrtlebank '
        ];
        $suburbs[] = [
            '3736', 'Myrtleford '
        ];
        $suburbs[] = [
            '3737', 'Myrtleford '
        ];
        $suburbs[] = [
            '3518', 'Mysia '
        ];
        $suburbs[] = [
            '3608', 'Nagambie '
        ];
        $suburbs[] = [
            '3249', 'Nalangil '
        ];
        $suburbs[] = [
            '3847', 'Nambrok '
        ];
        $suburbs[] = [
            '3533', 'Nandaly '
        ];
        $suburbs[] = [
            '3494', 'Nangiloc '
        ];
        $suburbs[] = [
            '3561', 'Nanneella '
        ];
        $suburbs[] = [
            '3352', 'Napoleons '
        ];
        $suburbs[] = [
            '3812', 'Nar Nar Goo'
        ];
        $suburbs[] = [
            '3778', 'Narbethong '
        ];
        $suburbs[] = [
            '3315', 'Nareen '
        ];
        $suburbs[] = [
            '3705', 'Nariel Valley'
        ];
        $suburbs[] = [
            '3277', 'Naringal '
        ];
        $suburbs[] = [
            '3285', 'Narrawong '
        ];
        $suburbs[] = [
            '3805', 'Narre Warren'
        ];
        $suburbs[] = [
            '3804', 'Narre Warren Eas'
        ];
        $suburbs[] = [
            '3804', 'Narre Warren Nort'
        ];
        $suburbs[] = [
            '3638', 'Nathalia '
        ];
        $suburbs[] = [
            '3409', 'Natimuk '
        ];
        $suburbs[] = [
            '3465', 'Natte Yallock'
        ];
        $suburbs[] = [
            '3384', 'Navarre '
        ];
        $suburbs[] = [
            '3352', 'Navigators '
        ];
        $suburbs[] = [
            '3831', 'Neerim '
        ];
        $suburbs[] = [
            '3821', 'Neerim Junction'
        ];
        $suburbs[] = [
            '3821', 'Neerim North'
        ];
        $suburbs[] = [
            '3831', 'Neerim South'
        ];
        $suburbs[] = [
            '3292', 'Nelson '
        ];
        $suburbs[] = [
            '3953', 'Nerrena '
        ];
        $suburbs[] = [
            '3351', 'Nerrin Nerrin'
        ];
        $suburbs[] = [
            '3350', 'Nerrina '
        ];
        $suburbs[] = [
            '3413', 'Neuarpurr '
        ];
        $suburbs[] = [
            '3438', 'New Gisborne'
        ];
        $suburbs[] = [
            '3825', 'Newborough '
        ];
        $suburbs[] = [
            '3551', 'Newbridge '
        ];
        $suburbs[] = [
            '3458', 'Newbury '
        ];
        $suburbs[] = [
            '3219', 'Newcomb '
        ];
        $suburbs[] = [
            '3442', 'Newham '
        ];
        $suburbs[] = [
            '3925', 'Newhaven '
        ];
        $suburbs[] = [
            '3875', 'Newlands Arm'
        ];
        $suburbs[] = [
            '3364', 'Newlyn '
        ];
        $suburbs[] = [
            '3886', 'Newmerella '
        ];
        $suburbs[] = [
            '3015', 'Newport '
        ];
        $suburbs[] = [
            '3859', 'Newry '
        ];
        $suburbs[] = [
            '3462', 'Newstead '
        ];
        $suburbs[] = [
            '3220', 'Newtown '
        ];
        $suburbs[] = [
            '3418', 'Nhill '
        ];
        $suburbs[] = [
            '3501', 'Nichols Point'
        ];
        $suburbs[] = [
            '3882', 'Nicholson '
        ];
        $suburbs[] = [
            '3042', 'Niddrie '
        ];
        $suburbs[] = [
            '3821', 'Nilma '
        ];
        $suburbs[] = [
            '3268', 'Nirranda '
        ];
        $suburbs[] = [
            '3174', 'Noble Park'
        ];
        $suburbs[] = [
            '3174', 'Noble Park Nort'
        ];
        $suburbs[] = [
            '3833', 'Noojee '
        ];
        $suburbs[] = [
            '3265', 'Noorat '
        ];
        $suburbs[] = [
            '3890', 'Noorinbee '
        ];
        $suburbs[] = [
            '3401', 'Noradjuha '
        ];
        $suburbs[] = [
            '3214', 'Norlane '
        ];
        $suburbs[] = [
            '3682', 'Norong '
        ];
        $suburbs[] = [
            '3550', 'North Bendigo'
        ];
        $suburbs[] = [
            '3215', 'North Geelong'
        ];
        $suburbs[] = [
            '3051', 'North Melbourne'
        ];
        $suburbs[] = [
            '3187', 'North Road'
        ];
        $suburbs[] = [
            '3214', 'North Shore'
        ];
        $suburbs[] = [
            '3113', 'North Warrandyte'
        ];
        $suburbs[] = [
            '3070', 'Northcote '
        ];
        $suburbs[] = [
            '3072', 'Northland Centre'
        ];
        $suburbs[] = [
            '3168', 'Notting Hill'
        ];
        $suburbs[] = [
            '3887', 'Nowa Nowa'
        ];
        $suburbs[] = [
            '3268', 'Nullawarre '
        ];
        $suburbs[] = [
            '3529', 'Nullawil '
        ];
        $suburbs[] = [
            '3636', 'Numurkah '
        ];
        $suburbs[] = [
            '3131', 'Nunawading '
        ];
        $suburbs[] = [
            '3110', 'Nunawading Bc'
        ];
        $suburbs[] = [
            '3099', 'Nutfield '
        ];
        $suburbs[] = [
            '3594', 'Nyah '
        ];
        $suburbs[] = [
            '3595', 'Nyah West'
        ];
        $suburbs[] = [
            '3987', 'Nyora '
        ];
        $suburbs[] = [
            '3046', 'Oak Park'
        ];
        $suburbs[] = [
            '3063', 'Oaklands Junction'
        ];
        $suburbs[] = [
            '3166', 'Oakleigh '
        ];
        $suburbs[] = [
            '3166', 'Oakleigh East'
        ];
        $suburbs[] = [
            '3167', 'Oakleigh South'
        ];
        $suburbs[] = [
            '3226', 'Ocean Grove'
        ];
        $suburbs[] = [
            '3809', 'Officer '
        ];
        $suburbs[] = [
            '3788', 'Olinda '
        ];
        $suburbs[] = [
            '3898', 'Omeo '
        ];
        $suburbs[] = [
            '3249', 'Ondit '
        ];
        $suburbs[] = [
            '3888', 'Orbost '
        ];
        $suburbs[] = [
            '3204', 'Ormond '
        ];
        $suburbs[] = [
            '3951', 'Outtrim '
        ];
        $suburbs[] = [
            '3490', 'Ouyen '
        ];
        $suburbs[] = [
            '3738', 'Ovens '
        ];
        $suburbs[] = [
            '3678', 'Oxley '
        ];
        $suburbs[] = [
            '3413', 'Ozenkadnook '
        ];
        $suburbs[] = [
            '3810', 'Pakenham '
        ];
        $suburbs[] = [
            '3810', 'Pakenham Upper'
        ];
        $suburbs[] = [
            '3265', 'Panmure '
        ];
        $suburbs[] = [
            '3759', 'Panton Hill'
        ];
        $suburbs[] = [
            '3851', 'Paradise Beach'
        ];
        $suburbs[] = [
            '3114', 'Park Orchards'
        ];
        $suburbs[] = [
            '3195', 'Parkdale '
        ];
        $suburbs[] = [
            '3052', 'Parkville '
        ];
        $suburbs[] = [
            '3340', 'Parwan '
        ];
        $suburbs[] = [
            '3044', 'Pascoe Vale'
        ];
        $suburbs[] = [
            '3044', 'Pascoe Vale Sout'
        ];
        $suburbs[] = [
            '3491', 'Patchewollock '
        ];
        $suburbs[] = [
            '3564', 'Patho '
        ];
        $suburbs[] = [
            '3197', 'Patterson Lakes'
        ];
        $suburbs[] = [
            '3880', 'Paynesville '
        ];
        $suburbs[] = [
            '3912', 'Pearcedale '
        ];
        $suburbs[] = [
            '3289', 'Penshurst '
        ];
        $suburbs[] = [
            '3413', 'Peronne '
        ];
        $suburbs[] = [
            '3270', 'Peterborough '
        ];
        $suburbs[] = [
            '3757', 'Pheasant Creek'
        ];
        $suburbs[] = [
            '3597', 'Piangil '
        ];
        $suburbs[] = [
            '3572', 'Piavella '
        ];
        $suburbs[] = [
            '3639', 'Picola '
        ];
        $suburbs[] = [
            '3631', 'Pine Lodge'
        ];
        $suburbs[] = [
            '3200', 'Pines Forest'
        ];
        $suburbs[] = [
            '3249', 'Pirron Yallock'
        ];
        $suburbs[] = [
            '3090', 'Plenty '
        ];
        $suburbs[] = [
            '3030', 'Point Cook'
        ];
        $suburbs[] = [
            '3260', 'Pomborneit '
        ];
        $suburbs[] = [
            '3381', 'Pomonal '
        ];
        $suburbs[] = [
            '3312', 'Poolaijelo '
        ];
        $suburbs[] = [
            '3352', 'Pootilla '
        ];
        $suburbs[] = [
            '3988', 'Poowong '
        ];
        $suburbs[] = [
            '3740', 'Porepunkah '
        ];
        $suburbs[] = [
            '3971', 'Port Albert'
        ];
        $suburbs[] = [
            '3269', 'Port Campbell'
        ];
        $suburbs[] = [
            '3284', 'Port Fairy'
        ];
        $suburbs[] = [
            '3964', 'Port Franklin'
        ];
        $suburbs[] = [
            '3207', 'Port Melbourne'
        ];
        $suburbs[] = [
            '3965', 'Port Welshpool'
        ];
        $suburbs[] = [
            '3223', 'Portarlington '
        ];
        $suburbs[] = [
            '3305', 'Portland '
        ];
        $suburbs[] = [
            '3944', 'Portsea '
        ];
        $suburbs[] = [
            '3797', 'Powelltown '
        ];
        $suburbs[] = [
            '3181', 'Prahran '
        ];
        $suburbs[] = [
            '3572', 'Prairie '
        ];
        $suburbs[] = [
            '3685', 'Prentice North'
        ];
        $suburbs[] = [
            '3072', 'Preston '
        ];
        $suburbs[] = [
            '3072', 'Preston South'
        ];
        $suburbs[] = [
            '3054', 'Princes Hill'
        ];
        $suburbs[] = [
            '3269', 'Princetown '
        ];
        $suburbs[] = [
            '3662', 'Puckapunyal Milpo'
        ];
        $suburbs[] = [
            '3271', 'Pura Pura'
        ];
        $suburbs[] = [
            '3278', 'Purnim '
        ];
        $suburbs[] = [
            '3521', 'Pyalong '
        ];
        $suburbs[] = [
            '3575', 'Pyramid Hill'
        ];
        $suburbs[] = [
            '3540', 'Quambatook '
        ];
        $suburbs[] = [
            '3401', 'Quantong '
        ];
        $suburbs[] = [
            '3550', 'Quarry Hill'
        ];
        $suburbs[] = [
            '3225', 'Queenscliff '
        ];
        $suburbs[] = [
            '3424', 'Rainbow '
        ];
        $suburbs[] = [
            '3132', 'Rangeview '
        ];
        $suburbs[] = [
            '3465', 'Rathscar '
        ];
        $suburbs[] = [
            '3453', 'Ravenswood '
        ];
        $suburbs[] = [
            '3825', 'Rawson '
        ];
        $suburbs[] = [
            '3880', 'Raymond Island'
        ];
        $suburbs[] = [
            '3570', 'Raywood '
        ];
        $suburbs[] = [
            '3695', 'Red Bluff'
        ];
        $suburbs[] = [
            '3496', 'Red Cliffs'
        ];
        $suburbs[] = [
            '3937', 'Red Hill'
        ];
        $suburbs[] = [
            '3937', 'Red Hill Sout'
        ];
        $suburbs[] = [
            '3350', 'Redan '
        ];
        $suburbs[] = [
            '3478', 'Redbank '
        ];
        $suburbs[] = [
            '3444', 'Redesdale '
        ];
        $suburbs[] = [
            '3658', 'Reedy Creek'
        ];
        $suburbs[] = [
            '3072', 'Regent West'
        ];
        $suburbs[] = [
            '3095', 'Research '
        ];
        $suburbs[] = [
            '3073', 'Reservoir '
        ];
        $suburbs[] = [
            '3923', 'Rhyll '
        ];
        $suburbs[] = [
            '3121', 'Richmond '
        ];
        $suburbs[] = [
            '3431', 'Riddells Creek'
        ];
        $suburbs[] = [
            '3134', 'Ringwood '
        ];
        $suburbs[] = [
            '3135', 'Ringwood East'
        ];
        $suburbs[] = [
            '3134', 'Ringwood North'
        ];
        $suburbs[] = [
            '3818', 'Ripplebrook '
        ];
        $suburbs[] = [
            '3185', 'Ripponlea '
        ];
        $suburbs[] = [
            '3019', 'Robinson '
        ];
        $suburbs[] = [
            '3549', 'Robinvale '
        ];
        $suburbs[] = [
            '3561', 'Rochester '
        ];
        $suburbs[] = [
            '3442', 'Rochford '
        ];
        $suburbs[] = [
            '3335', 'Rockbank '
        ];
        $suburbs[] = [
            '3401', 'Rocklands '
        ];
        $suburbs[] = [
            '3364', 'Rocklyn '
        ];
        $suburbs[] = [
            '3821', 'Rokeby '
        ];
        $suburbs[] = [
            '3330', 'Rokewood '
        ];
        $suburbs[] = [
            '3351', 'Rokewood Junction'
        ];
        $suburbs[] = [
            '3434', 'Romsey '
        ];
        $suburbs[] = [
            '3084', 'Rosanna '
        ];
        $suburbs[] = [
            '3285', 'Rosebrook '
        ];
        $suburbs[] = [
            '3939', 'Rosebud '
        ];
        $suburbs[] = [
            '3940', 'Rosebud West'
        ];
        $suburbs[] = [
            '3847', 'Rosedale '
        ];
        $suburbs[] = [
            '3351', 'Ross Creek'
        ];
        $suburbs[] = [
            '3340', 'Rowsley '
        ];
        $suburbs[] = [
            '3178', 'Rowville '
        ];
        $suburbs[] = [
            '3064', 'Roxburgh Park'
        ];
        $suburbs[] = [
            '3050', 'Royal Melbourne Hospita'
        ];
        $suburbs[] = [
            '3712', 'Rubicon '
        ];
        $suburbs[] = [
            '3666', 'Ruffy '
        ];
        $suburbs[] = [
            '3388', 'Rupanyup '
        ];
        $suburbs[] = [
            '3612', 'Rushworth '
        ];
        $suburbs[] = [
            '3331', 'Russells Bridge'
        ];
        $suburbs[] = [
            '3685', 'Rutherglen '
        ];
        $suburbs[] = [
            '3941', 'Rye '
        ];
        $suburbs[] = [
            '3936', 'Safety Beach'
        ];
        $suburbs[] = [
            '3088', 'Saint Helena'
        ];
        $suburbs[] = [
            '3850', 'Sale '
        ];
        $suburbs[] = [
            '3853', 'Sale '
        ];
        $suburbs[] = [
            '3517', 'Salisbury West'
        ];
        $suburbs[] = [
            '3925', 'San Remo'
        ];
        $suburbs[] = [
            '3312', 'Sandford '
        ];
        $suburbs[] = [
            '3550', 'Sandhurst East'
        ];
        $suburbs[] = [
            '3171', 'Sandown Village'
        ];
        $suburbs[] = [
            '3191', 'Sandringham '
        ];
        $suburbs[] = [
            '3695', 'Sandy Creek'
        ];
        $suburbs[] = [
            '3959', 'Sandy Point'
        ];
        $suburbs[] = [
            '3875', 'Sarsfield '
        ];
        $suburbs[] = [
            '3787', 'Sassafras '
        ];
        $suburbs[] = [
            '3787', 'Sassafras Gully'
        ];
        $suburbs[] = [
            '3351', 'Scarsdale '
        ];
        $suburbs[] = [
            '3179', 'Scoresby '
        ];
        $suburbs[] = [
            '3176', 'Scoresby Bc'
        ];
        $suburbs[] = [
            '3352', 'Scotsburn '
        ];
        $suburbs[] = [
            '3267', 'Scotts Creek'
        ];
        $suburbs[] = [
            '3533', 'Sea Lake'
        ];
        $suburbs[] = [
            '3028', 'Seabrook '
        ];
        $suburbs[] = [
            '3198', 'Seaford '
        ];
        $suburbs[] = [
            '3018', 'Seaholme '
        ];
        $suburbs[] = [
            '3851', 'Seaspray '
        ];
        $suburbs[] = [
            '3858', 'Seaton '
        ];
        $suburbs[] = [
            '3556', 'Sebastian '
        ];
        $suburbs[] = [
            '3356', 'Sebastopol '
        ];
        $suburbs[] = [
            '3011', 'Seddon '
        ];
        $suburbs[] = [
            '3011', 'Seddon West'
        ];
        $suburbs[] = [
            '3159', 'Selby '
        ];
        $suburbs[] = [
            '3517', 'Serpentine '
        ];
        $suburbs[] = [
            '3420', 'Serviceton '
        ];
        $suburbs[] = [
            '3139', 'Seville '
        ];
        $suburbs[] = [
            '3660', 'Seymour '
        ];
        $suburbs[] = [
            '3661', 'Seymour '
        ];
        $suburbs[] = [
            '3331', 'She Oaks'
        ];
        $suburbs[] = [
            '3392', 'Sheep Hills'
        ];
        $suburbs[] = [
            '3463', 'Shelbourne '
        ];
        $suburbs[] = [
            '3329', 'Shelford '
        ];
        $suburbs[] = [
            '3701', 'Shelley '
        ];
        $suburbs[] = [
            '3630', 'Shepparton '
        ];
        $suburbs[] = [
            '3632', 'Shepparton '
        ];
        $suburbs[] = [
            '3631', 'Shepparton East'
        ];
        $suburbs[] = [
            '3789', 'Sherbrooke '
        ];
        $suburbs[] = [
            '3916', 'Shoreham '
        ];
        $suburbs[] = [
            '3795', 'Silvan '
        ];
        $suburbs[] = [
            '3564', 'Simmie '
        ];
        $suburbs[] = [
            '3266', 'Simpson '
        ];
        $suburbs[] = [
            '3465', 'Simson '
        ];
        $suburbs[] = [
            '3361', 'Skipton '
        ];
        $suburbs[] = [
            '3977', 'Skye '
        ];
        $suburbs[] = [
            '3364', 'Smeaton '
        ];
        $suburbs[] = [
            '3760', 'Smiths Gully'
        ];
        $suburbs[] = [
            '3351', 'Smythes Creek'
        ];
        $suburbs[] = [
            '3351', 'Smythesdale '
        ];
        $suburbs[] = [
            '3351', 'Snake Valley'
        ];
        $suburbs[] = [
            '3927', 'Somers '
        ];
        $suburbs[] = [
            '3062', 'Somerton '
        ];
        $suburbs[] = [
            '3912', 'Somerville '
        ];
        $suburbs[] = [
            '3943', 'Sorrento '
        ];
        $suburbs[] = [
            '3995', 'South Dudley'
        ];
        $suburbs[] = [
            '3015', 'South Kingsville'
        ];
        $suburbs[] = [
            '3205', 'South Melbourne'
        ];
        $suburbs[] = [
            '3205', 'South Melbourne D'
        ];
        $suburbs[] = [
            '3752', 'South Morang'
        ];
        $suburbs[] = [
            '3141', 'South Yarra'
        ];
        $suburbs[] = [
            '3006', 'Southbank '
        ];
        $suburbs[] = [
            '3283', 'Southern Cross'
        ];
        $suburbs[] = [
            '3192', 'Southland Centre'
        ];
        $suburbs[] = [
            '3350', 'Sovereign Hill'
        ];
        $suburbs[] = [
            '3488', 'Speed '
        ];
        $suburbs[] = [
            '3015', 'Spotswood '
        ];
        $suburbs[] = [
            '3550', 'Spring Gully'
        ];
        $suburbs[] = [
            '3352', 'Springbank '
        ];
        $suburbs[] = [
            '3682', 'Springhurst '
        ];
        $suburbs[] = [
            '3171', 'Springvale '
        ];
        $suburbs[] = [
            '3172', 'Springvale South'
        ];
        $suburbs[] = [
            '3021', 'St Albans'
        ];
        $suburbs[] = [
            '3219', 'St Albans Par'
        ];
        $suburbs[] = [
            '3761', 'St Andrews'
        ];
        $suburbs[] = [
            '3941', 'St Andrews Beac'
        ];
        $suburbs[] = [
            '3478', 'St Arnaud'
        ];
        $suburbs[] = [
            '3285', 'St Helens'
        ];
        $suburbs[] = [
            '3727', 'St James'
        ];
        $suburbs[] = [
            '3182', 'St Kilda'
        ];
        $suburbs[] = [
            '3183', 'St Kilda Eas'
        ];
        $suburbs[] = [
            '8004', 'St Kilda Roa'
        ];
        $suburbs[] = [
            '8008', 'St Kilda Roa'
        ];
        $suburbs[] = [
            '3182', 'St Kilda Sout'
        ];
        $suburbs[] = [
            '3182', 'St Kilda Wes'
        ];
        $suburbs[] = [
            '3223', 'St Leonards'
        ];
        $suburbs[] = [
            '3691', 'Staghorn Flat'
        ];
        $suburbs[] = [
            '3623', 'Stanhope '
        ];
        $suburbs[] = [
            '3747', 'Stanley '
        ];
        $suburbs[] = [
            '3221', 'Staughton Vale'
        ];
        $suburbs[] = [
            '3379', 'Stavely '
        ];
        $suburbs[] = [
            '3380', 'Stawell '
        ];
        $suburbs[] = [
            '3775', 'Steels Creek'
        ];
        $suburbs[] = [
            '3331', 'Steiglitz '
        ];
        $suburbs[] = [
            '3221', 'Stonehaven '
        ];
        $suburbs[] = [
            '3371', 'Stony Creek'
        ];
        $suburbs[] = [
            '3957', 'Stony Creek'
        ];
        $suburbs[] = [
            '3260', 'Stonyford '
        ];
        $suburbs[] = [
            '3862', 'Stratford '
        ];
        $suburbs[] = [
            '3658', 'Strath Creek'
        ];
        $suburbs[] = [
            '3622', 'Strathallan '
        ];
        $suburbs[] = [
            '3666', 'Strathbogie '
        ];
        $suburbs[] = [
            '3550', 'Strathdale '
        ];
        $suburbs[] = [
            '3312', 'Strathdownie '
        ];
        $suburbs[] = [
            '3099', 'Strathewen '
        ];
        $suburbs[] = [
            '3551', 'Strathfieldsaye '
        ];
        $suburbs[] = [
            '3301', 'Strathkellar '
        ];
        $suburbs[] = [
            '3641', 'Strathmerton '
        ];
        $suburbs[] = [
            '3041', 'Strathmore '
        ];
        $suburbs[] = [
            '3041', 'Strathmore Heights'
        ];
        $suburbs[] = [
            '3351', 'Streatham '
        ];
        $suburbs[] = [
            '3478', 'Stuart Mill'
        ];
        $suburbs[] = [
            '3152', 'Studfield '
        ];
        $suburbs[] = [
            '3429', 'Sunbury '
        ];
        $suburbs[] = [
            '3496', 'Sunnycliffs '
        ];
        $suburbs[] = [
            '3020', 'Sunshine '
        ];
        $suburbs[] = [
            '3127', 'Surrey Hills'
        ];
        $suburbs[] = [
            '3331', 'Sutherlands Creek'
        ];
        $suburbs[] = [
            '3448', 'Sutton Grange'
        ];
        $suburbs[] = [
            '3585', 'Swan Hill'
        ];
        $suburbs[] = [
            '3249', 'Swan Marsh'
        ];
        $suburbs[] = [
            '3903', 'Swan Reach'
        ];
        $suburbs[] = [
            '3673', 'Swanpool '
        ];
        $suburbs[] = [
            '3896', 'Swifts Creek'
        ];
        $suburbs[] = [
            '3037', 'Sydenham '
        ];
        $suburbs[] = [
            '3149', 'Syndal '
        ];
        $suburbs[] = [
            '3607', 'Tabilk '
        ];
        $suburbs[] = [
            '3714', 'Taggerty '
        ];
        $suburbs[] = [
            '3371', 'Talbot '
        ];
        $suburbs[] = [
            '3691', 'Talgarno '
        ];
        $suburbs[] = [
            '3700', 'Tallangatta '
        ];
        $suburbs[] = [
            '3659', 'Tallarook '
        ];
        $suburbs[] = [
            '3634', 'Tallygaroopna '
        ];
        $suburbs[] = [
            '3893', 'Tambo Crossing'
        ];
        $suburbs[] = [
            '3885', 'Tambo Upper'
        ];
        $suburbs[] = [
            '3669', 'Tamleugh '
        ];
        $suburbs[] = [
            '3631', 'Tamleugh West'
        ];
        $suburbs[] = [
            '3571', 'Tandarra '
        ];
        $suburbs[] = [
            '3691', 'Tangambalanga '
        ];
        $suburbs[] = [
            '3825', 'Tanjil South'
        ];
        $suburbs[] = [
            '3921', 'Tankerton '
        ];
        $suburbs[] = [
            '3447', 'Taradale '
        ];
        $suburbs[] = [
            '3551', 'Tarnagulla '
        ];
        $suburbs[] = [
            '3029', 'Tarneit '
        ];
        $suburbs[] = [
            '3422', 'Tarranyurk '
        ];
        $suburbs[] = [
            '3971', 'Tarraville '
        ];
        $suburbs[] = [
            '3301', 'Tarrington '
        ];
        $suburbs[] = [
            '3956', 'Tarwin '
        ];
        $suburbs[] = [
            '3673', 'Tatong '
        ];
        $suburbs[] = [
            '3616', 'Tatura '
        ];
        $suburbs[] = [
            '3378', 'Tatyoon '
        ];
        $suburbs[] = [
            '3697', 'Tawonga '
        ];
        $suburbs[] = [
            '3698', 'Tawonga South'
        ];
        $suburbs[] = [
            '3038', 'Taylors Lakes'
        ];
        $suburbs[] = [
            '3160', 'Tecoma '
        ];
        $suburbs[] = [
            '3328', 'Teesdale '
        ];
        $suburbs[] = [
            '3401', 'Telangatuk East'
        ];
        $suburbs[] = [
            '3730', 'Telford '
        ];
        $suburbs[] = [
            '3106', 'Templestowe '
        ];
        $suburbs[] = [
            '3107', 'Templestowe Lower'
        ];
        $suburbs[] = [
            '3489', 'Tempy '
        ];
        $suburbs[] = [
            '3984', 'Tenby Point'
        ];
        $suburbs[] = [
            '3572', 'Tennyson '
        ];
        $suburbs[] = [
            '3264', 'Terang '
        ];
        $suburbs[] = [
            '3154', 'The Basin'
        ];
        $suburbs[] = [
            '3984', 'The Gurdies'
        ];
        $suburbs[] = [
            '3792', 'The Patch'
        ];
        $suburbs[] = [
            '3265', 'The Sisters'
        ];
        $suburbs[] = [
            '3074', 'Thomastown '
        ];
        $suburbs[] = [
            '3726', 'Thoona '
        ];
        $suburbs[] = [
            '3071', 'Thornbury '
        ];
        $suburbs[] = [
            '3712', 'Thornton '
        ];
        $suburbs[] = [
            '3835', 'Thorpdale '
        ];
        $suburbs[] = [
            '3824', 'Thorpdale South'
        ];
        $suburbs[] = [
            '3707', 'Thowgla Valley'
        ];
        $suburbs[] = [
            '3797', 'Three Bridges'
        ];
        $suburbs[] = [
            '3960', 'Tidal River'
        ];
        $suburbs[] = [
            '3268', 'Timboon '
        ];
        $suburbs[] = [
            '3859', 'Tinamba '
        ];
        $suburbs[] = [
            '3708', 'Tintaldra '
        ];
        $suburbs[] = [
            '3621', 'Tongala '
        ];
        $suburbs[] = [
            '3815', 'Tonimbuk '
        ];
        $suburbs[] = [
            '3522', 'Tooborac '
        ];
        $suburbs[] = [
            '3614', 'Toolamba '
        ];
        $suburbs[] = [
            '3777', 'Toolangi '
        ];
        $suburbs[] = [
            '3337', 'Toolern Vale'
        ];
        $suburbs[] = [
            '3551', 'Toolleen '
        ];
        $suburbs[] = [
            '3401', 'Toolondo '
        ];
        $suburbs[] = [
            '3285', 'Toolong '
        ];
        $suburbs[] = [
            '3856', 'Toongabbie '
        ];
        $suburbs[] = [
            '3962', 'Toora '
        ];
        $suburbs[] = [
            '3980', 'Tooradin '
        ];
        $suburbs[] = [
            '3142', 'Toorak '
        ];
        $suburbs[] = [
            '3941', 'Tootgarook '
        ];
        $suburbs[] = [
            '3228', 'Torquay '
        ];
        $suburbs[] = [
            '3562', 'Torrumbarry '
        ];
        $suburbs[] = [
            '3012', 'Tottenham '
        ];
        $suburbs[] = [
            '3283', 'Tower Hill'
        ];
        $suburbs[] = [
            '3707', 'Towong '
        ];
        $suburbs[] = [
            '3824', 'Trafalgar '
        ];
        $suburbs[] = [
            '3844', 'Traralgon '
        ];
        $suburbs[] = [
            '3032', 'Travancore '
        ];
        $suburbs[] = [
            '3373', 'Trawalla '
        ];
        $suburbs[] = [
            '3660', 'Trawool '
        ];
        $suburbs[] = [
            '3458', 'Trentham '
        ];
        $suburbs[] = [
            '3583', 'Tresco '
        ];
        $suburbs[] = [
            '3029', 'Truganina '
        ];
        $suburbs[] = [
            '3888', 'Tubbut '
        ];
        $suburbs[] = [
            '3915', 'Tuerong '
        ];
        $suburbs[] = [
            '3043', 'Tullamarine '
        ];
        $suburbs[] = [
            '3728', 'Tungamah '
        ];
        $suburbs[] = [
            '3109', 'Tunstall Square P'
        ];
        $suburbs[] = [
            '3913', 'Tyabb '
        ];
        $suburbs[] = [
            '3844', 'Tyers '
        ];
        $suburbs[] = [
            '3444', 'Tylden '
        ];
        $suburbs[] = [
            '3813', 'Tynong '
        ];
        $suburbs[] = [
            '3285', 'Tyrendarra '
        ];
        $suburbs[] = [
            '3550', 'Tysons Reef'
        ];
        $suburbs[] = [
            '3364', 'Ullina '
        ];
        $suburbs[] = [
            '3544', 'Ultima '
        ];
        $suburbs[] = [
            '3629', 'Undera '
        ];
        $suburbs[] = [
            '3509', 'Underbool '
        ];
        $suburbs[] = [
            '3010', 'University Of Melbourn'
        ];
        $suburbs[] = [
            '3156', 'Upper Ferntree Gull'
        ];
        $suburbs[] = [
            '3756', 'Upper Plenty'
        ];
        $suburbs[] = [
            '3158', 'Upwey '
        ];
        $suburbs[] = [
            '3860', 'Valencia Creek'
        ];
        $suburbs[] = [
            '3407', 'Vasey '
        ];
        $suburbs[] = [
            '3956', 'Venus Bay'
        ];
        $suburbs[] = [
            '3133', 'Vermont '
        ];
        $suburbs[] = [
            '3133', 'Vermont South'
        ];
        $suburbs[] = [
            '3814', 'Vervale '
        ];
        $suburbs[] = [
            '3294', 'Victoria Valley'
        ];
        $suburbs[] = [
            '3084', 'Viewbank '
        ];
        $suburbs[] = [
            '3591', 'Vinifera '
        ];
        $suburbs[] = [
            '3669', 'Violet Town'
        ];
        $suburbs[] = [
            '3885', 'W Tree'
        ];
        $suburbs[] = [
            '3637', 'Waaia '
        ];
        $suburbs[] = [
            '3687', 'Wahgunyah '
        ];
        $suburbs[] = [
            '3608', 'Wahring '
        ];
        $suburbs[] = [
            '3887', 'Wairewa '
        ];
        $suburbs[] = [
            '3544', 'Waitchie '
        ];
        $suburbs[] = [
            '3825', 'Walhalla '
        ];
        $suburbs[] = [
            '3956', 'Walkerville '
        ];
        $suburbs[] = [
            '3956', 'Walkerville South'
        ];
        $suburbs[] = [
            '3352', 'Wallace '
        ];
        $suburbs[] = [
            '3756', 'Wallan '
        ];
        $suburbs[] = [
            '3221', 'Wallington '
        ];
        $suburbs[] = [
            '3401', 'Wallup '
        ];
        $suburbs[] = [
            '3875', 'Walpa '
        ];
        $suburbs[] = [
            '3507', 'Walpeup '
        ];
        $suburbs[] = [
            '3709', 'Walwa '
        ];
        $suburbs[] = [
            '3612', 'Wanalta '
        ];
        $suburbs[] = [
            '3216', 'Wandana Heights'
        ];
        $suburbs[] = [
            '3744', 'Wandiligong '
        ];
        $suburbs[] = [
            '3139', 'Wandin North'
        ];
        $suburbs[] = [
            '3312', 'Wando Vale'
        ];
        $suburbs[] = [
            '3758', 'Wandong '
        ];
        $suburbs[] = [
            '3676', 'Wangaratta '
        ];
        $suburbs[] = [
            '3677', 'Wangaratta '
        ];
        $suburbs[] = [
            '3279', 'Wangoom '
        ];
        $suburbs[] = [
            '3152', 'Wantirna '
        ];
        $suburbs[] = [
            '3152', 'Wantirna South'
        ];
        $suburbs[] = [
            '3959', 'Waratah Bay'
        ];
        $suburbs[] = [
            '3799', 'Warburton '
        ];
        $suburbs[] = [
            '3465', 'Wareek '
        ];
        $suburbs[] = [
            '3243', 'Warncoort '
        ];
        $suburbs[] = [
            '3980', 'Warneet '
        ];
        $suburbs[] = [
            '3393', 'Warracknabeal '
        ];
        $suburbs[] = [
            '3820', 'Warragul '
        ];
        $suburbs[] = [
            '3377', 'Warrak '
        ];
        $suburbs[] = [
            '3113', 'Warrandyte '
        ];
        $suburbs[] = [
            '3134', 'Warrandyte South'
        ];
        $suburbs[] = [
            '3134', 'Warranwood '
        ];
        $suburbs[] = [
            '3670', 'Warrenbayne '
        ];
        $suburbs[] = [
            '3352', 'Warrenheip '
        ];
        $suburbs[] = [
            '3249', 'Warrion '
        ];
        $suburbs[] = [
            '3280', 'Warrnambool '
        ];
        $suburbs[] = [
            '3482', 'Watchem '
        ];
        $suburbs[] = [
            '3485', 'Watchupga '
        ];
        $suburbs[] = [
            '3195', 'Waterways '
        ];
        $suburbs[] = [
            '3087', 'Watsonia '
        ];
        $suburbs[] = [
            '3097', 'Watsons Creek'
        ];
        $suburbs[] = [
            '3096', 'Wattle Glen'
        ];
        $suburbs[] = [
            '3128', 'Wattle Park'
        ];
        $suburbs[] = [
            '3352', 'Waubra '
        ];
        $suburbs[] = [
            '3216', 'Waurn Ponds'
        ];
        $suburbs[] = [
            '3352', 'Weatherboard '
        ];
        $suburbs[] = [
            '3518', 'Wedderburn '
        ];
        $suburbs[] = [
            '3251', 'Weering '
        ];
        $suburbs[] = [
            '3966', 'Welshpool '
        ];
        $suburbs[] = [
            '3355', 'Wendouree '
        ];
        $suburbs[] = [
            '3355', 'Wendouree Village'
        ];
        $suburbs[] = [
            '3352', 'Werneth '
        ];
        $suburbs[] = [
            '3030', 'Werribee '
        ];
        $suburbs[] = [
            '3496', 'Werrimull '
        ];
        $suburbs[] = [
            '3799', 'Wesburn '
        ];
        $suburbs[] = [
            '3012', 'West Footscray'
        ];
        $suburbs[] = [
            '3003', 'West Melbourne'
        ];
        $suburbs[] = [
            '3049', 'Westmeadows '
        ];
        $suburbs[] = [
            '3351', 'Westmere '
        ];
        $suburbs[] = [
            '3150', 'Wheelers Hill'
        ];
        $suburbs[] = [
            '3550', 'White Hills'
        ];
        $suburbs[] = [
            '3733', 'Whitfield '
        ];
        $suburbs[] = [
            '3733', 'Whitlands '
        ];
        $suburbs[] = [
            '3219', 'Whittington '
        ];
        $suburbs[] = [
            '3757', 'Whittlesea '
        ];
        $suburbs[] = [
            '3735', 'Whorouly '
        ];
        $suburbs[] = [
            '3379', 'Wickliffe '
        ];
        $suburbs[] = [
            '3728', 'Wilby '
        ];
        $suburbs[] = [
            '3379', 'Willaura '
        ];
        $suburbs[] = [
            '3016', 'Williamstown '
        ];
        $suburbs[] = [
            '3825', 'Willow Grove'
        ];
        $suburbs[] = [
            '3847', 'Willung '
        ];
        $suburbs[] = [
            '3844', 'Willung South'
        ];
        $suburbs[] = [
            '3241', 'Winchelsea '
        ];
        $suburbs[] = [
            '3352', 'Windermere '
        ];
        $suburbs[] = [
            '3181', 'Windsor '
        ];
        $suburbs[] = [
            '3304', 'Winnap '
        ];
        $suburbs[] = [
            '3281', 'Winslow '
        ];
        $suburbs[] = [
            '3673', 'Winton '
        ];
        $suburbs[] = [
            '3885', 'Wiseleigh '
        ];
        $suburbs[] = [
            '3189', 'Wishart '
        ];
        $suburbs[] = [
            '3689', 'Wodonga '
        ];
        $suburbs[] = [
            '3690', 'Wodonga '
        ];
        $suburbs[] = [
            '3690', 'Wodonga Plaza'
        ];
        $suburbs[] = [
            '3750', 'Wollert '
        ];
        $suburbs[] = [
            '3401', 'Wombelano '
        ];
        $suburbs[] = [
            '3971', 'Won Wron'
        ];
        $suburbs[] = [
            '3115', 'Wonga Park'
        ];
        $suburbs[] = [
            '3221', 'Wongarra '
        ];
        $suburbs[] = [
            '3995', 'Wonthaggi '
        ];
        $suburbs[] = [
            '3596', 'Wood Wood'
        ];
        $suburbs[] = [
            '3442', 'Woodend '
        ];
        $suburbs[] = [
            '3715', 'Woodfield '
        ];
        $suburbs[] = [
            '3281', 'Woodford '
        ];
        $suburbs[] = [
            '3945', 'Woodleigh '
        ];
        $suburbs[] = [
            '3723', 'Woods Point'
        ];
        $suburbs[] = [
            '3874', 'Woodside '
        ];
        $suburbs[] = [
            '3751', 'Woodstock '
        ];
        $suburbs[] = [
            '3463', 'Woodstock West'
        ];
        $suburbs[] = [
            '3249', 'Wool Wool'
        ];
        $suburbs[] = [
            '3995', 'Woolamai '
        ];
        $suburbs[] = [
            '3276', 'Woolsthorpe '
        ];
        $suburbs[] = [
            '3485', 'Woomelang '
        ];
        $suburbs[] = [
            '3747', 'Wooragee '
        ];
        $suburbs[] = [
            '3139', 'Woori Yallock'
        ];
        $suburbs[] = [
            '3589', 'Woorinen '
        ];
        $suburbs[] = [
            '3588', 'Woorinen South'
        ];
        $suburbs[] = [
            '3272', 'Woorndoo '
        ];
        $suburbs[] = [
            '3005', 'World Trade Centr'
        ];
        $suburbs[] = [
            '8005', 'World Trade Centr'
        ];
        $suburbs[] = [
            '3885', 'Wulgulmerang '
        ];
        $suburbs[] = [
            '3635', 'Wunghnu '
        ];
        $suburbs[] = [
            '3241', 'Wurdiboluc '
        ];
        $suburbs[] = [
            '3850', 'Wurruk '
        ];
        $suburbs[] = [
            '3875', 'Wy Yung'
        ];
        $suburbs[] = [
            '3527', 'Wycheproof '
        ];
        $suburbs[] = [
            '3525', 'Wychitella '
        ];
        $suburbs[] = [
            '3221', 'Wye River'
        ];
        $suburbs[] = [
            '3024', 'Wyndham Vale'
        ];
        $suburbs[] = [
            '3620', 'Wyuna '
        ];
        $suburbs[] = [
            '3424', 'Yaapeet '
        ];
        $suburbs[] = [
            '3646', 'Yabba North'
        ];
        $suburbs[] = [
            '3749', 'Yackandandah '
        ];
        $suburbs[] = [
            '3085', 'Yallambie '
        ];
        $suburbs[] = [
            '3825', 'Yallourn North'
        ];
        $suburbs[] = [
            '3285', 'Yambuk '
        ];
        $suburbs[] = [
            '3621', 'Yambuna '
        ];
        $suburbs[] = [
            '3755', 'Yan Yean'
        ];
        $suburbs[] = [
            '3418', 'Yanac '
        ];
        $suburbs[] = [
            '3960', 'Yanakie '
        ];
        $suburbs[] = [
            '3461', 'Yandoit '
        ];
        $suburbs[] = [
            '3981', 'Yannathan '
        ];
        $suburbs[] = [
            '3719', 'Yarck '
        ];
        $suburbs[] = [
            '3775', 'Yarra Glen'
        ];
        $suburbs[] = [
            '3797', 'Yarra Junction'
        ];
        $suburbs[] = [
            '3823', 'Yarragon '
        ];
        $suburbs[] = [
            '3971', 'Yarram '
        ];
        $suburbs[] = [
            '3091', 'Yarrambat '
        ];
        $suburbs[] = [
            '3013', 'Yarraville '
        ];
        $suburbs[] = [
            '3013', 'Yarraville West'
        ];
        $suburbs[] = [
            '3575', 'Yarrawalla '
        ];
        $suburbs[] = [
            '3730', 'Yarrawonga '
        ];
        $suburbs[] = [
            '3644', 'Yarroweyah '
        ];
        $suburbs[] = [
            '3677', 'Yarrunga '
        ];
        $suburbs[] = [
            '3717', 'Yea '
        ];
        $suburbs[] = [
            '3139', 'Yellingbo '
        ];
        $suburbs[] = [
            '3352', 'Yendon '
        ];
        $suburbs[] = [
            '3249', 'Yeo '
        ];
        $suburbs[] = [
            '3249', 'Yeodene '
        ];
        $suburbs[] = [
            '3869', 'Yinnar '
        ];
        $suburbs[] = [
            '3646', 'Youanmite '
        ];
        $suburbs[] = [
            '3727', 'Yundool '
        ];
        $suburbs[] = [
            '3063', 'Yuroke '
        ];

        return $suburbs;
    }
}
