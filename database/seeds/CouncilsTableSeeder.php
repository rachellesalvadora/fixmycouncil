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

class CouncilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $councils = $this->getAllCouncils();

        foreach ($councils as $council) {
            DB::table('councils')->insert([
                'name' => $council[0],
                'address' => $council[1],
                'postal' => $council[2],
                'postal_suburb' => $council[3],
                'suburb_town' => $council[4],
                'postcode' => $council[5],
                'phone' => $council[6],
                'fax' => $council[7],
                'email' => $council[8],
                'website' => $council[9],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }

    // return all councils from victoria
    public function getAllCouncils()
    {
        $councils = array();
        $councils[] = array (
            'Yarra City Council','333 Bridge Road','PO Box 168','RICHMOND','RICHMOND','3121','9205 5555','8417 6666','info@yarracity.vic.gov.au','www.yarracity.vic.gov.au'
            );
        $councils[] = array (
            'Moonee Valley City Council','9 Kellaway Avenue','PO Box 126','MOONEE PONDS','MOONEE PONDS','3039','9243 8888','9377 2100','council@mvcc.vic.gov.au','www.mvcc.vic.gov.au '
            );
        $councils[] = array (
            'Latrobe City Council','141 Commercial Road','PO Box 264','MORWELL','MORWELL','3840','1300 367 700','5128 5672','latrobe@latrobe.vic.gov.au','www.latrobe.vic.gov.au'
            );
        $councils[] = array (
            'Murrindindi Shire Council','Perkins Street','PO Box 138','ALEXANDRA','ALEXANDRA','3714','5772 0333','5772 2291','msc@murrindindi.vic.gov.au','www.murrindindi.vic.gov.au'
            );
        $councils[] = array (
            'Ballarat City Council','25 Armstrong Street South','PO Box 655','BALLARAT','BALLARAT','3350','5320 5500','5333 4061','ballcity@ballarat.vic.gov.au','www.ballarat.vic.gov.au'
            );
        $councils[] = array (
            'South Gippsland Shire Council','9 Smith Street','Private Bag 4','LEONGATHA','LEONGATHA','3953','5662 9200','5662 3754','council@southgippsland.vic.gov.au','www.southgippsland.vic.gov.au'
            );
        $councils[] = array (
            'Surf Coast Shire Council','1 Merrijig Drive','PO Box 350','TORQUAY','TORQUAY','3228','5261 0600','5261 0525','info@surfcoast.vic.gov.au','www.surfcoast.vic.gov.au'
            );
        $councils[] = array (
            'Brimbank City Council','Brimbank Community & Civic Centre, 301 Hampshire Rd','PO Box 70','SUNSHINE','SUNSHINE','3020','9249 4000','9249 4351','info@brimbank.vic.gov.au','www.brimbank.vic.gov.au'
            );
        $councils[] = array (
            'Port Phillip City Council','99a Carlisle Street','Private Bag 3','ST KILDA','ST KILDA','3182','9209 6777','9534 9105','assist@portphillip.vic.gov.au','www.portphillip.vic.gov.au'
            );
        $councils[] = array (
            'Wellington Shire Council','18 Desailly Street','PO Box 506','SALE','SALE','3850','1300 366 244','5142 3501','enquiries@wellington.vic.gov.au','www.wellington.vic.gov.au'
            );
        $councils[] = array (
            'Wodonga City Council','104 Hovell Street','PO Box 923','WODONGA','WODONGA','3690','02 6022 9300','02 6022 9322','info@wodonga.vic.gov.au','www.wodonga.vic.gov.au'
            );
        $councils[] = array (
            'Warrnambool City Council','25 Liebig Street','PO Box 198','WARRNAMBOOL','WARRNAMBOOL','3280','5559 4800','5559 4900','wbool_city@warrnambool.vic.gov.au','www.warrnambool.vic.gov.au'
            );
        $councils[] = array (
            'Central Goldfields Shire Council','12-22 Nolan Street','PO Box 194','MARYBOROUGH','MARYBOROUGH','3465','5461 0610','5461 0666','mail@cgoldshire.vic.gov.au','www.centralgoldfields.com.au'
            );
        $councils[] = array (
            'Glenelg Shire Council','71 Cliff Street','PO Box 152','PORTLAND','PORTLAND','3305','5522 2200','5522 2290','enquiry@glenelg.vic.gov.au','www.glenelg.vic.gov.au'
            );
        $councils[] = array (
            'Bass Coast Shire Council','76 McBride Avenue','PO Box 118','WONTHAGGI','WONTHAGGI','3995','1300 BCOAST (226278) or 5671 2211','5671 2222','basscoast@basscoast.vic.gov.au','www.basscoast.vic.gov.au'
            );
        $councils[] = array (
            'Darebin City Council','274 Gower Street','PO Box 91','PRESTON','PRESTON','3072','8470 8888','8470 8877','mailbox@darebin.vic.gov.au','www.darebin.vic.gov.au'
            );
        $councils[] = array (
            'Hobsons Bay City Council','115 Civic Parade','PO Box 21','ALTONA','ALTONA','3018','9932 1000','9932 1039','customerservice@hobsonsbay.vic.gov.au','www.hobsonsbay.vic.gov.au'
            );
        $councils[] = array (
            'Corangamite Shire Council','181 Maniford Street','PO Box 84','CAMPERDOWN','CAMPERDOWN','3260','5593 7100','5593 2695','shire@corangamite.vic.gov.au','www.corangamite.vic.gov.au'
            );
        $councils[] = array (
            'Ararat Rural City Council','59 Vincent Street','PO Box 246','ARARAT','ARARAT','3377','5355 0200','5352 1695','council@ararat.vic.gov.au','www.ararat.vic.gov.au'
            );
        $councils[] = array (
            'Mansfield Shire Council','33 Highett Street','Private Bag 1000','MANSFIELD','MANSFIELD','3722','5775 8555','5775 2677','council@mansfield.vic.gov.au','www.mansfield.vic.gov.au'
            );
        $councils[] = array (
            'Hindmarsh Shire Council','92 Nelson Street','PO Box 250 ','NHILL','NHILL','3418','5391 4444','5391 1376','info@hindmarsh.vic.gov.au','www.hindmarsh.vic.gov.au'
            );
        $councils[] = array (
            'Wangaratta Rural City Council','Cnr Ford & Ovens Streets','PO Box 238','WANGARATTA','WANGARATTA','3677','5722 0888','5721 9526','council@wangaratta.vic.gov.au','www.wangaratta.vic.gov.au'
            );
        $councils[] = array (
            'West Wimmera Shire Council','49 Elizabeth Street','PO Box 201','EDENHOPE','EDENHOPE','3318','5585 9900','5585 9950','council@westwimmera.vic.gov.au','www.westwimmera.vic.gov.au'
            );
        $councils[] = array (
            'Strathbogie Shire Council','109A Binney Street','PO Box 177','EUROA','EUROA','3666','5795 0000','5795 3550','info@strathbogie.vic.gov.au','www.strathbogie.vic.gov.au'
            );
        $councils[] = array (
            'Greater Shepparton City Council','90 Welsford Street','Locked Bag 1000','SHEPPARTON','SHEPPARTON','3632','5832 9700','5831 1987','council@shepparton.vic.gov.au','greatershepparton.com.au'
            );
        $councils[] = array (
            'Yarriambiack Shire Council','34 Lyle Street','PO Box 243','WARRACKNABEAL','WARRACKNABEAL','3393','5398 0100','5398 2502','info@yarriambiack.vic.gov.au','www.yarriambiack.vic.gov.au'
            );
        $councils[] = array (
            'Stonnington City Council','Cnr Glenferrie Rd & High St','PO Box 21','PRAHRAN','MALVERN','3144','8290 1333','9521 2255','council@stonnington.vic.gov.au','www.stonnington.vic.gov.au'
            );
        $councils[] = array (
            'Campaspe Shire Council','Cnr Hare & Heygarth Streets','PO Box 35','ECHUCA','ECHUCA','3564','5481 2200','5481 2290','shire@campaspe.vic.gov.au','www.campaspe.vic.gov.au'
            );
        $councils[] = array (
            'Nillumbik Shire Council','Civic Drive','PO Box 476','GREENSBOROUGH','GREENSBOROUGH','3088','9433 3111','9433 3777','nillumbik@nillumbik.vic.gov.au','www.nillumbik.vic.gov.au'
            );
        $councils[] = array (
            'Mornington Peninsula Shire Council','90 Besgrove Street','Private Bag 1000','ROSEBUD','ROSEBUD','3939','1300 850 600','5986 6696','customerservice@mornpen.vic.gov.au','www.mornpen.vic.gov.au'
            );
        $councils[] = array (
            'Maribyrnong City Council','Cnr Hyde & Napier Streets','PO Box 58','FOOTSCRAY','FOOTSCRAY','3011','9688 0200','9687 7793','email@maribyrnong.vic.gov.au','www.maribyrnong.vic.gov.au'
            );
        $councils[] = array (
            'Macedon Ranges Shire Council','129 Mollison Street','PO Box 151','KYNETON','KYNETON','3444','5422 0333','5422 3623','mrsc@mrsc.vic.gov.au','www.mrsc.vic.gov.au'
            );
        $councils[] = array (
            'Monash City Council','293 Springvale Road','PO Box 1','GLEN WAVERLEY','GLEN WAVERLEY','3150','9518 3555','9518 3444','mail@monash.vic.gov.au','www.monash.vic.gov.au'
            );
        $councils[] = array (
            'Kingston City Council','1230 Nepean Highway','PO Box 1000','MENTONE','CHELTENHAM','3192','1300 653 356','9581 4500','info@kingston.vic.gov.au','www.kingston.vic.gov.au'
            );
        $councils[] = array (
            'Baw Baw Shire Council','Civic Place','PO Box 304','WARRAGUL','WARRAGUL','3820','5624 2411','5622 3654','bawbaw@bawbawshire.vic.gov.au','www.bawbawshire.vic.gov.au'
            );
        $councils[] = array (
            'Hume City Council','1079 Pascoe Vale Road','PO Box 119','DALLAS','BROADMEADOWS','3047','9205 2200','9309 0109','email@hume.vic.gov.au','www.hume.vic.gov.au'
            );
        $councils[] = array (
            'Mitchell Shire Council','113 High Street','113 High Street','BROADFORD','BROADFORD','3658','5734 6200','5734 6222','mitchell@mitchellshire.vic.gov.au','www.mitchellshire.vic.gov.au'
            );
        $councils[] = array (
            'Pyrenees Shire Council','5 Lawrence Street','5 Lawrence Street','BEAUFORT','BEAUFORT','3373','5349 1100','5349 2068','pyrenees@pyrenees.vic.gov.au','www.pyrenees.vic.gov.au'
            );
        $councils[] = array (
            'Cardinia Shire Council','20 Siding Avenue','PO Box 7','PAKENHAM','OFFICER','3809','1300 787 624','5941 3784','mail@cardinia.vic.gov.au','www.cardinia.vic.gov.au'
            );
        $councils[] = array (
            'Indigo Shire Council','2 Kurrajong Way','PO Box 28','BEECHWORTH','BEECHWORTH','3747','5728 8000','5728 1676','info@indigoshire.vic.gov.au','www.indigoshire.vic.gov.au'
            );
        $councils[] = array (
            'Melton City Council','232 High Street','PO Box 21','MELTON','MELTON','3337','9747 7200','9743 9970','csu@melton.vic.gov.au','www.melton.vic.gov.au'
            );
        $councils[] = array (
            'Benalla Rural City Council','1 Bridge Street East','PO Box 227','BENALLA','BENALLA','3672','5760 2600','5762 5537','council@benalla.vic.gov.au','www.benalla.vic.gov.au'
            );
        $councils[] = array (
            'East Gippsland Shire Council','273 Main Street','PO Box 1618','BAIRNSDALE','BAIRNSDALE','3875','5153 9500','5153 9576','feedback@egipps.vic.gov.au','www.eastgippsland.vic.gov.au'
            );
        $councils[] = array (
            'Glen Eira City Council','Cnr Glen Eira & Hawthorn Rds','PO Box 42','CAULFIELD SOUTH','CAULFIELD SOUTH','3162','9524 3333','9523 0339','mail@gleneira.vic.gov.au','www.gleneira.vic.gov.au'
            );
        $councils[] = array (
            'Golden Plains Shire Council','2 Pope Street','PO Box 111','BANNOCKBURN','BANNOCKBURN','3331','5220 7111','5220 7100','enquiries@gplains.vic.gov.au','www.goldenplains.vic.gov.au'
            );
        $councils[] = array (
            'Southern Grampians Shire Council','111 Brown Street','Locked Bag 685','HAMILTON','HAMILTON','3300','5573 0444','5572 2910','council@sthgrampians.vic.gov.au','www.sthgrampians.vic.gov.au'
            );
        $councils[] = array (
            'Boroondara City Council','8 Inglesby Road','Private Bag 1','CAMBERWELL','CAMBERWELL','3124','9278 4444','9278 4466','boroondara@boroondara.vic.gov.au','www.boroondara.vic.gov.au'
            );
        $councils[] = array (
            'Greater Dandenong City Council','225 Lonsdale Street','PO Box 200','DANDENONG','DANDENONG','3175','8571 1000','8571 5196','council@cgd.vic.gov.au','www.greaterdandenong.com'
            );
        $councils[] = array (
            'Banyule City Council','275 Upper Heidelberg Road ','PO Box 51','IVANHOE','IVANHOE','3079','9490 4222','9499 9475','enquiries@banyule.vic.gov.au','www.banyule.vic.gov.au'
            );
        $councils[] = array (
            'Mount Alexander Shire Council','25 Lyttleton Street','PO Box 185','CASTLEMAINE','CASTLEMAINE','3450','5471 1700','5471 1749','info@mountalexander.vic.gov.au','www.mountalexander.vic.gov.au'
            );
        $councils[] = array (
            'Hepburn Shire Council','76 Vincent Street','PO Box 21','DAYLESFORD','DAYLESFORD','3460','5348 2306','5348 2911','shire@hepburn.vic.gov.au','www.hepburn.vic.gov.au'
            );
        $councils[] = array (
            'Moira Shire Council','44 Station Street','PO Box 578','COBRAM','COBRAM','3643','5871 9222','5872 1567','webmaster@moira.vic.gov.au','www.moira.vic.gov.au'
            );
        $councils[] = array (
            'Corangamite Shire Council','181 Maniford Street','30','CAMPERDOWN','CAMPERDOWN','3260','5593 7100','5593 2695','shire@corangamite.vic.gov.au','www.corangamite.vic.gov.au'
            );
        $councils[] = array (
            'Colac Otway Shire Council','2-6 Rae Street','PO Box 283','COLAC','COLAC','3250','5232 9400','5232 1046','inq@colacotway.vic.gov.au','www.colacotway.vic.gov.au'
            );
        $councils[] = array (
            'Frankston City Council','30 Davey Street','PO Box 490','FRANKSTON','FRANKSTON','3199','1300 322 322','9784 1094','correspondence@frankston.vic.gov.au ','www.frankston.vic.gov.au'
            );
        $councils[] = array (
            'Knox City Council','511 Burwood Highway','511 Burwood Highway','WANTIRNA SOUTH','WANTIRNA SOUTH','3152','9298 8000','9800 3096','knoxcc@knox.vic.gov.au','www.knox.vic.gov.au'
            );
        $councils[] = array (
            'Casey City Council','Magid Drive','PO Box 1000','NARRE WARREN','NARRE WARREN','3805','9705 5200','9796 7730','caseycc@casey.vic.gov.au','www.casey.vic.gov.au'
            );
        $councils[] = array (
            'Bayside City Council','76 Royal Avenue','PO Box 27','SANDRINGHAM','SANDRINGHAM','3191','9599 4444','9598 4474','enquiries@bayside.vic.gov.au','www.bayside.vic.gov.au'
            );
        $councils[] = array (
            'Maroondah City Council','Braeside Avenue','PO Box 156','RINGWOOD','RINGWOOD','3134','1300 882 233','9298 4345','maroondah@maroondah.vic.gov.au','www.maroondah.vic.gov.au'
            );
        $councils[] = array (
        'Yarra Ranges Shire Council','Anderson Street','PO Box 105','LILYDALE','LILYDALE','3140','1300 368 333','9735 4249','mail@yarraranges.vic.gov.au','www.yarraranges.vic.gov.au'
        );
        $councils[] = array (
        'Greater Geelong City Council','City Hall, 57 Little Malop Street','PO Box 104','GEELONG','GEELONG','3220','5272 5272','5272 4277','COGGRecords@geelongcity.vic.gov.au','www.geelongaustralia.com.au'
        );
        $councils[] = array (
        'Greater Bendigo City Council','195 Lyttleton Terrace','PO Box 733','BENDIGO','BENDIGO','3550','5434 6000','5434 6200','info@bendigo.vic.gov.au','www.bendigo.vic.gov.au'
        );
        $councils[] = array (
        'Buloke Shire Council','367 Broadway','PO Box 1','WYCHEPROOF','WYCHEPROOF','3527','5478 0100','5493 7395','buloke@buloke.vic.gov.au','www.buloke.vic.gov.au'
        );
        $councils[] = array (
        'Swan Hill Rural City Council','45 Splatt Street','PO Box 488','SWAN HILL','SWAN HILL','3585','5036 2333','5036 2340','council@swanhill.vic.gov.au','www.swanhill.vic.gov.au'
        );
        $councils[] = array (
        'Whittlesea City Council','25 Ferres Boulevard','Locked Bag 1','BUNDOORA MDC','SOUTH MORANG','3752','9217 2170','9217 2111','info@whittlesea.vic.gov.au','www.whittlesea.vic.gov.au'
        );
        $councils[] = array (
        'Towong Shire Council','32 Towong Street','PO Box 55','TALLANGATTA','TALLANGATTA','3700','02 6071 5100','02 6071 2747','info@towong.vic.gov.au','www.towong.vic.gov.au'
        );
        $councils[] = array (
        'Whitehorse City Council','379-397 Whitehorse Road','Locked Bag 2','NUNAWADING DELIVERY CENTRE','NUNAWADING','3131','9262 6333','9262 6490','customer.service@whitehorse.vic.gov.au','www.whitehorse.vic.gov.au'
        );
        $councils[] = array (
        'Alpine Shire Council','Great Alpine Road','PO Box 139','BRIGHT','BRIGHT','3741','5755 0555','5755 1811','info@alpineshire.vic.gov.au','www.alpineshire.vic.gov.au'
        );
        $councils[] = array (
        'Gannawarra Shire Council','47 Victoria Street','PO Box 287','KERANG','KERANG','3579','5450 9333','5450 3023','council@gannawarra.vic.gov.au','www.gannawarra.vic.gov.au'
        );
        $councils[] = array (
        'Manningham City Council','699 Doncaster Road','PO Box 1','DONCASTER','DONCASTER','3108','9840 9333','9848 3110','manningham@manningham.vic.gov.au','www.manningham.vic.gov.au'
        );
        $councils[] = array (
        'Moreland City Council','90 Bell Street','Locked Bag 10','MORELAND','COBURG','3058','9240 1111','9240 1212','info@moreland.vic.gov.au','www.moreland.vic.gov.au'
        );
        $councils[] = array (
        'Moorabool Shire Council','15 Stead Street','PO Box 18','BALLAN','BALLAN','3342','5366 7100','5368 1757','info@moorabool.vic.gov.au','www.moorabool.vic.gov.au '
        );
        $councils[] = array (
        'Mildura Rural City Council','108-116 Madden Avenue','PO Box 105','MILDURA','MILDURA','3500','5018 8100','5021 1899','mrcc@mildura.vic.gov.au','www.mildura.vic.gov.au'
        );
        $councils[] = array (
        'Melbourne City Council','Town Hall, 120 Swanston St','GPO Box 1603','MELBOURNE','MELBOURNE','3000','9658 9658','9654 4854','enquiries@melbourne.vic.gov.au','www.melbourne.vic.gov.au'
        );
        $councils[] = array (
        'Horsham Rural City Council','Civic Centre, Roberts Avenue','PO Box 511','HORSHAM','HORSHAM','3402','5382 9777','5382 1111','council@hrcc.vic.gov.au','www.hrcc.vic.gov.au'
        );
        $councils[] = array (
        'Wyndham City Council','45 Princes Highway','PO Box 197','WERRIBEE','WERRIBEE','3030','9742 0777','9741 6237','mail@wyndham.vic.gov.au','www.wyndham.vic.gov.au'
        );
        $councils[] = array (
        'Loddon Shire Council','41 High Street','PO Box 21','WEDDERBURN','WEDDERBURN','3518','5494 1200','5494 3003','loddon@loddon.vic.gov.au','www.loddon.vic.gov.au'
        );
        $councils[] = array (
        'Moyne Shire Council','Princes Street','PO Box 51','PORT FAIRY','PORT FAIRY','3284','5568 0555','5568 2515','moyne@moyne.vic.gov.au','www.moyne.vic.gov.au'
        );
        $councils[] = array (
        'Northern Grampians Shire Council','Town Hall, Main Street','PO Box 580','STAWELL','STAWELL','3380','5358 8700','5358 4151','ngshire@ngshire.vic.gov.au','www.ngshire.vic.gov.au'
        );

        return $councils;
    }
}
