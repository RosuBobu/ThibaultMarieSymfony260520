<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

// use Doctrine\Persistence\ObjectManager;





class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $user = new User();
            $user->setEmail('admin@deloitte.com');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(md5('admin123@'));

            $manager->persist($user);
            $manager->flush();
    }
}

//TODO make work this fckn file