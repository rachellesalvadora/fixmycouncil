<?php

use Illuminate\Database\Seeder;

class PostcodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postcodes = $this->getAllPostcodes();

        foreach($postcodes as $postcode) {
            DB::table('postcodes')->insert([
                'postcode' => $postcode,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }

    // return all victorian postcodes
    public function getAllPostcodes()
    {
        $postcodes = array("3067","3040","3825","3714","3352","3962","3231","3042","3021","3206","3971","3020","3350","3691","3277","3364","3305","3465","3979","3078","3018","3028","3025","3249","3377","3221","3715","3230","3414","3615607","3677","3319","3631","3995","3022","3629","3480","3143","3551","3099","3936","3032","3442","3147","3195","3818","3049","3664","3467","3034","3782","3747","3340","3670","3608","3875","3354","3183","3342","3353","3666","3407","3926","3103","3104","3561","3241","3694","3175","3331","3388","3084","3463","3451","3381","3639","3557","3688","3329","3243","3227","3991","3911","3375","3981","3153","3807","3808","3475","3373","3193","3135","3251","3237","3160","3215","3228","3216","3198","3889","3946","3671","3672","3673","3900","3630","3097","3550","3552","3554","3888","3125","3960","3204","3165","3518","3351","3531","3323","3953","3806","3472","3395","3590","3753","3707","3966","3483","3242","3918","3130","3458","3942","3980","3699","3669","3860","3432","3546","3196","3720","3870","3265","3678","3685","3537","3155","3599","3735","3128","3129","3725","3302","3019","3219","3131","3088","3516","3741","3186","3187","3184","3391","3658","3047","3301","3338","3012","3056","3057","3055","3885","3240","3958","3737","3428","3461","3105","3437","3821","3634","3851","3730","3083","3260","3726","3357","3815","3121","3023","3709","3151","3281","3711","3762","3617","3505","3984","3556","3573","3844","3124","3126","3061","3890","3540","3977","3925","3274","3312","3978","3496","3464","3239","3053","3054","3163","3874","3361","3197","3201","3494","3311","3450","3162","3145","3161","3314","3148","3695","3525","3379","3192","3824","3683","3116","3775","3842","3169","3430","3168","3068","3222","3370","3266","3643","3644","3058","3781","3568","3250","3559","3770","3315","3066","8003","8007","3303","3633","3318","3048","3616","3814","3214","3254","3523","3506","3922","3857","3064","3322","3363","3919","3136","3705","3530","3268","3385","3992","3164","3862","3871","3271","3822","3756","3304","3701","3460","3217","3235","3356","3037","3280","3030","3325","3610","3089","3309","3427","3571","3172","3898","3008","3108","3109","3111","3401","3646","3647","3754","3177","3446","3956","3294","3576","3878","3002","8002","3852","3564","3757","3713","3334","3746","3469","3558","3448","3185","3095","3802","3895","3076","3041","3739","3371","3060","3864","3156","3786","3939","3959","3065","3031","3929","8009","3717","3011","3236","3805","3199","3200","3207","3220","3218","3783","3891","3418","3797","3841","3624","3043","3990","3146","3150","3854","3858","3675","3046","3293","3719","3555","3345","3873","3412","3723","3341","3059","3566","3850","3803","3300","3188","3976","3453","3317","3915","3287","3142","3122","3123","3777","3758","3202","3967","3081","3273","3190","3920","3139","3396","3029","3238","3400","3402","3051","3166","3282","3223","3517","3636","3321","3996","3498","3079","3840","3945","3423","3902","3869","3951","3399","3909","3791","3766","3419","3649","3640","3036","3038","3033","3073","3579","3434","3660","3101","3102","3173","3283","3764","3137","3763","3152","3180","3704","3580","3954","3501","3144","3520","3950","3565","3638","3622","3621","3930","3337","3619","3620","3444","3816","3584","3581","3727","3887","3542","3075","3435","3384","3910","3212","3487","3026","8010","3415","3567","3224","3332","3420","3140","3865","3360","3324","3211","3563","3665","3232","3093","3975","3286","3440","3085","3275","3928","3892","3663","3722","3724","3387","3515","3812","3779","3938","3799","3000","3001","8001","3045","3052","3194","3159","3333","3310","3916","3618","3904","3500","3502","3082","3572","3575","3413","3392","3132","3355","3718","3800","3793","3127","3094","3765","3478","3039","3189","3933","3138","3931","3272","3740","3024","3767","3796","3441","3934","3149","3732","3462","3170","3512","3390","3736","3847","3533","3778","3285","3804","3409","3831","3292","3438","3886","3015","3859","3882","3174","3833","3682","3113","3070","3072","3529","3110","3594","3595","3987","3063","3167","3226","3809","3788","3490","3738","3810","3759","3114","3044","3491","3880","3912","3289","3270","3597","3090","3225","3988","3269","3284","3964","3965","3944","3181","3662","3278","3521","3424","3570","3937","3923","3431","3134","3549","3335","3330","3940","3178","3050","3712","3612","3941","3853","3171","3191","3787","3179","3176","3267","3661","3632","3789","3795","3760","3927","3062","3943","3205","3752","3141","3006","3488","3761","3182","8004","8008","3623","3380","3957","3641","3429","3585","3903","3896","3607","3700","3659","3893","3921","3447","3422","3378","3697","3698","3328","3106","3107","3489","3264","3154","3792","3074","3071","3835","3708","3522","3614","3856","3562","3583","3728","3913","3813","3544","3509","3010","3158","3133","3591","3637","3687","3507","3744","3676","3279","3393","3820","3482","3485","3087","3096","3003","3733","3016","3689","3690","3750","3115","3596","3751","3276","3589","3588","3005","8005","3635","3527","3749","3755","3823","3091","3013");

        return $postcodes;
    }
}