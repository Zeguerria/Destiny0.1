<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            ['id'=>1, 'name'=> "Okawe", 'prenom'=>"Jeremy", 'email'=>"supadmin0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/kYmGdjUqGmkVkksOJrU8QbszJueJLl0QxT3Z57f9.jpg','supprimer'=>0,'pseudo'=>'Zeguerria','role_id'=>9,'profil_id'=>6],
            ['id'=>2, 'name'=> "Jarvan", 'prenom'=>"IV", 'email'=>"livreur0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/xEm417WtMdXm2M9j0D4jRUznkDLqSAo2frG3EUg3.avif','supprimer'=>0,'pseudo'=>'JvaIV','role_id'=>21,'profil_id'=>3],
            ['id'=>3, 'name'=> "Ossibadjo", 'prenom'=>"Oceane", 'email'=>"operateur0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/303UFy11EkXFZi2NHIeQgCkNrrdUvRpg3O85R4zc.avif','supprimer'=>0,'pseudo'=>'Océane','role_id'=>10,'profil_id'=>4],
            ['id'=>4, 'name'=> "Lee", 'prenom'=>"Xin", 'email'=>"livreur1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/NYMDxMMIViYMvFwgH3PdSTgOqDDbohRufYL56qDP.jpg','supprimer'=>0,'pseudo'=>'Draken','role_id'=>21,'profil_id'=>3],
            ['id'=>5, 'name'=> "Mendoza", 'prenom'=>"Evelinn", 'email'=>"operateur1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/yIQTguBeaSPOU314zc789ygPfucG8M59vk0D3Hgu.jpg','supprimer'=>0,'pseudo'=>'Dominica','role_id'=>10,'profil_id'=>4],
            ['id'=>6, 'name'=> "Pisci", 'prenom'=>"Dino", 'email'=>"admin0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/5NNFtDj653pfjqusuV7IW4CJEqq6lDDJxy3xH5uI.jpg','supprimer'=>0,'pseudo'=>'Tepei','role_id'=>7,'profil_id'=>5],
            ['id'=>7, 'name'=> "Dona", 'prenom'=>"Senna", 'email'=>"admin1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/iqPZjaO0aJTbYN3mTuXYLzPfGDCkAwn0OUyn2xeF.jpg','supprimer'=>0,'pseudo'=>'La Dona','role_id'=>7,'profil_id'=>5],
            ['id'=>8, 'name'=> "Renata", 'prenom'=>"Black", 'email'=>"supadmin1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/fNqYDezslg2mHwAAs4T5BSWMNGBlAMgFpc1E5zPj.jpg','supprimer'=>0,'pseudo'=>'Eye','role_id'=>9,'profil_id'=>6],
            ['id'=>9, 'name'=> "Bouanga Ngoma", 'prenom'=>"Ted", 'email'=>"tedmarvais@gmail.com", 'password'=> '$2y$10$zoAIzPDcGpGlAUgSKv1fneHKK5VgCbOOgcw5pK8I6I5k81WmNzM06','photo'=>'public/images/users/ZashiFQWZhynXz7EVYARm5Ug5kLKJZcrMsNoVQsQ.jpg','supprimer'=>0,'pseudo'=>'Omeg’-Marvais','role_id'=>7,'profil_id'=>5],
            ['id'=>10, 'name'=> "Ogandanga Tiwino", 'prenom'=>"Christ", 'email'=>"christtiwino@gmail.com", 'password'=> '$2y$10$l9YE9PX4Eo6p8gxvDMHEFeVHv/KecNqtx6AfogI9PPZrIXNJVNWsK','photo'=>'public/images/users/6cvFBcX7SvTaFS4iGvX307eb0QLEqCdeH9NuaGfX.jpg','supprimer'=>0,'pseudo'=>'Ancien Chasseur','role_id'=>7,'profil_id'=>5],
            ['id'=>11, 'name'=> "Mbadinga kombila", 'prenom'=>"Vlady Bruce", 'email'=>"brucevlady1999@gmail.com", 'password'=> '$2y$10$l9YE9PX4Eo6p8gxvDMHEFeVHv/KecNqtx6AfogI9PPZrIXNJVNWsK','photo'=>'public/images/users/0Y8Mpvq1PdgapEsqplchflWtp361k5s8ypLp2f8M.jpg','supprimer'=>0,'pseudo'=>'El Blanco','role_id'=>7,'profil_id'=>5],
            ['id'=>12, 'name'=> "Boulingui Leroche", 'prenom'=>"Faosia", 'email'=>"oseeboulingui@gmail.com ", 'password'=> '$2y$10$38bTieNHgxQN..T5ewY1gepAmGxGlFMmtSC97s8uWNn2FzeTCqHBm','photo'=>'public/images/users/BujG0oa0uWn5UmVhBPWiwcpOLJMwtWc2MQvcYYEO.jpg','supprimer'=>0,'pseudo'=>'Princesse','role_id'=>10,'profil_id'=>4],
            ['id'=>13, 'name'=> "Moussouami Avoungou", 'prenom'=>"Joël Claude", 'email'=>"moussouamijoel241@gmail.com", 'password'=> '$2y$10$.6uhZTo.xY0gG8aUF/leIOLelO/CbClhj7/1ZwxklTM9MyPWev5w.','photo'=>'public/images/users/BujG0oa0uWn5UmVhBPWiwcpOLJMwtWc2MQvcYYEO.jpg','supprimer'=>0,'pseudo'=>'Prod_Osevn','role_id'=>10,'profil_id'=>4],
            ['id'=>14, 'name'=> "Ndamba", 'prenom'=>"Marcel", 'email'=>"ndzambamarcel@gmail.com", 'password'=> '$2y$10$2Oug9vz5vAPxYy2bqVbmp.HTZQ.aPiIXAL63VW5v.uWK3iI9y9I4e','photo'=>'public/images/users/BujG0oa0uWn5UmVhBPWiwcpOLJMwtWc2MQvcYYEO.jpg','supprimer'=>0,'pseudo'=>'Marki','role_id'=>7,'profil_id'=>5],
            ['id'=>15, 'name'=> "Maniga Moussavou", 'prenom'=>"Jennifer", 'email'=>"jennymaniga07@gmail.com", 'password'=> '$2y$10$UoL8YPld1bZvGjR2H8sKLuDg0BmgRHzLaFJGhgko7JYr5o3SVe2Ru','photo'=>'public/images/users/rEw5T3fQEAzssCNYkKutc2FedfNZxG7QRiDvsP15.jpg','supprimer'=>0,'pseudo'=>'Jenny','role_id'=>9,'profil_id'=>6],

        ]);
    }
}
