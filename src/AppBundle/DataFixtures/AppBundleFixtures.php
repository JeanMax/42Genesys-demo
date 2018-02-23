<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Article;
use AppBundle\Entity\Picture;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppBundleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $img_dir = 'img/';
        $puppy_dir = 'puppy/';
        $kitten_dir = 'kitten/';

        $kittens = array(
            'k1',
            'k2',
            'k3',
        );

        $puppies = array(
            'p1',
            'p2',
            'p3',
        );

        $authors = array(
            'Millard',
            'Robin',
            'Janeth',
            'Ivonne',
            'Ashlyn',
            'Pattie',
            'Ivan',
            'Marine',
            'Renetta',
            'Virgil',
            'Laureen',
            'Missy',
            'Natalia',
            'Margot',
            'Nga',
            'Marisha',
            'Cheyenne',
            'Manuela',
            'Shenna',
            'Frankie',
            'Danae',
            'Nikki',
            'Pamela',
            'Timika',
            'Juliette',
            'Natalie',
            'Geraldo',
            'Isabel',
        );

        $contents = array(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum facilisis leo. Vitae ultricies leo integer malesuada. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Lectus sit amet est placerat in. In iaculis nunc sed augue lacus viverra vitae congue eu. Viverra aliquet eget sit amet tellus cras adipiscing. Malesuada nunc vel risus commodo viverra maecenas. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Turpis massa sed elementum tempus egestas. In dictum non consectetur a erat nam at lectus urna. Pharetra magna ac placerat vestibulum lectus mauris ultrices.',

            'Consequat id porta nibh venenatis cras sed felis eget. Eget dolor morbi non arcu risus quis varius. Eget lorem dolor sed viverra ipsum nunc. In ante metus dictum at tempor. Duis ut diam quam nulla porttitor massa. Pretium lectus quam id leo in vitae turpis massa. Bibendum ut tristique et egestas quis. Morbi quis commodo odio aenean. Cursus sit amet dictum sit amet. Lacus suspendisse faucibus interdum posuere. Pulvinar sapien et ligula ullamcorper malesuada.',

            'Mi in nulla posuere sollicitudin aliquam. Gravida dictum fusce ut placerat orci nulla pellentesque. Scelerisque purus semper eget duis at tellus. Erat nam at lectus urna duis. Ornare massa eget egestas purus. Sed sed risus pretium quam vulputate dignissim. Donec ultrices tincidunt arcu non sodales neque. Enim tortor at auctor urna nunc id cursus metus. Sapien nec sagittis aliquam malesuada. Risus in hendrerit gravida rutrum quisque. Purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Non quam lacus suspendisse faucibus interdum posuere lorem. Dolor magna eget est lorem ipsum dolor. Et tortor consequat id porta nibh venenatis. Fringilla est ullamcorper eget nulla facilisi etiam. Potenti nullam ac tortor vitae purus faucibus.',

            'In hendrerit gravida rutrum quisque non tellus orci. Pulvinar sapien et ligula ullamcorper malesuada proin libero. Imperdiet proin fermentum leo vel orci porta non pulvinar. Sapien pellentesque habitant morbi tristique. Eget aliquet nibh praesent tristique. Ut venenatis tellus in metus vulputate eu scelerisque felis. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Ipsum nunc aliquet bibendum enim facilisis gravida neque. Integer vitae justo eget magna fermentum iaculis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Id donec ultrices tincidunt arcu non sodales. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Amet nisl suscipit adipiscing bibendum est ultricies. Lacus laoreet non curabitur gravida arcu ac tortor. Tellus cras adipiscing enim eu turpis. Leo integer malesuada nunc vel risus commodo. Ullamcorper a lacus vestibulum sed arcu non odio euismod lacinia.',

            'Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Adipiscing vitae proin sagittis nisl. Volutpat sed cras ornare arcu dui vivamus arcu. Lacinia quis vel eros donec ac odio. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Amet nisl purus in mollis nunc sed id semper. Orci dapibus ultrices in iaculis nunc sed augue. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Urna condimentum mattis pellentesque id nibh tortor. Pellentesque id nibh tortor id aliquet lectus.',

            'Scelerisque mauris pellentesque pulvinar pellentesque habitant. Enim sed faucibus turpis in eu mi bibendum neque egestas. Dolor morbi non arcu risus quis varius quam quisque id. Pharetra magna ac placerat vestibulum. Facilisi nullam vehicula ipsum a arcu cursus. Eget magna fermentum iaculis eu non diam. Aliquet nec ullamcorper sit amet risus nullam. Viverra nam libero justo laoreet sit amet cursus. Rhoncus urna neque viverra justo nec ultrices. Viverra vitae congue eu consequat. Dictum non consectetur a erat. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque. Sit amet luctus venenatis lectus. Scelerisque purus semper eget duis at tellus.',

            'Pellentesque eu tincidunt tortor aliquam nulla facilisi. Pellentesque massa placerat duis ultricies lacus sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis. Posuere morbi leo urna molestie at elementum eu facilisis sed. Cursus turpis massa tincidunt dui. Cursus sit amet dictum sit amet justo donec. Adipiscing tristique risus nec feugiat. Pharetra convallis posuere morbi leo urna molestie at elementum. In iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet consectetur adipiscing elit duis. Felis eget nunc lobortis mattis aliquam faucibus purus. Mauris pharetra et ultrices neque ornare aenean euismod elementum. Eget arcu dictum varius duis at consectetur lorem donec massa. Sit amet purus gravida quis blandit. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Vel fringilla est ullamcorper eget nulla facilisi. A condimentum vitae sapien pellentesque habitant morbi tristique.',

            'Cursus turpis massa tincidunt dui ut ornare lectus. Turpis nunc eget lorem dolor. Faucibus purus in massa tempor nec feugiat nisl pretium. Pulvinar pellentesque habitant morbi tristique. Pellentesque pulvinar pellentesque habitant morbi. Magnis dis parturient montes nascetur ridiculus mus. Pulvinar etiam non quam lacus suspendisse faucibus interdum. Volutpat maecenas volutpat blandit aliquam etiam erat. Ipsum suspendisse ultrices gravida dictum fusce ut. Tortor at risus viverra adipiscing at in tellus integer feugiat. Congue nisi vitae suscipit tellus mauris. Donec enim diam vulputate ut. Velit scelerisque in dictum non consectetur a erat. Ac auctor augue mauris augue neque gravida in fermentum et. Ultrices eros in cursus turpis massa tincidunt. Rhoncus mattis rhoncus urna neque. Integer vitae justo eget magna fermentum iaculis eu non.',

            'Integer feugiat scelerisque varius morbi enim nunc. Pellentesque adipiscing commodo elit at. Quisque id diam vel quam. Enim ut sem viverra aliquet eget sit amet. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Sapien et ligula ullamcorper malesuada. Leo vel orci porta non pulvinar. Natoque penatibus et magnis dis parturient montes nascetur. Cursus eget nunc scelerisque viverra mauris in. Felis bibendum ut tristique et egestas quis. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Eget gravida cum sociis natoque penatibus et. Urna molestie at elementum eu facilisis sed odio morbi quis. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Neque laoreet suspendisse interdum consectetur libero id faucibus. Integer feugiat scelerisque varius morbi enim. Pellentesque massa placerat duis ultricies lacus sed turpis. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Est ante in nibh mauris cursus mattis molestie a iaculis.',

            'Aenean euismod elementum nisi quis. Odio eu feugiat pretium nibh ipsum consequat nisl vel. Dui ut ornare lectus sit amet est placerat. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Amet nisl purus in mollis nunc sed id. Volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nisl vel pretium lectus quam id leo. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Faucibus nisl tincidunt eget nullam non nisi est sit. Nullam ac tortor vitae purus faucibus ornare suspendisse. Quis risus sed vulputate odio. Leo urna molestie at elementum. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. Augue eget arcu dictum varius duis at consectetur lorem donec. Sed tempus urna et pharetra pharetra massa. Malesuada bibendum arcu vitae elementum curabitur vitae nunc. Vulputate odio ut enim blandit volutpat maecenas.',

            'Fringilla ut morbi tincidunt augue interdum. Odio tempor orci dapibus ultrices in iaculis nunc sed. In hendrerit gravida rutrum quisque non tellus orci ac. Massa sed elementum tempus egestas. Scelerisque purus semper eget duis at. Est lorem ipsum dolor sit amet. Arcu odio ut sem nulla pharetra diam sit amet nisl. Massa tempor nec feugiat nisl pretium fusce id velit. Mi ipsum faucibus vitae aliquet nec ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Sit amet facilisis magna etiam tempor orci. Mi proin sed libero enim sed faucibus.',

            'In egestas erat imperdiet sed euismod. Nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi. Eu feugiat pretium nibh ipsum. Malesuada pellentesque elit eget gravida cum sociis natoque. Mattis enim ut tellus elementum sagittis vitae et leo duis. Nunc sed id semper risus in hendrerit gravida. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Viverra orci sagittis eu volutpat odio. At erat pellentesque adipiscing commodo elit at imperdiet dui. Quis viverra nibh cras pulvinar mattis nunc sed blandit libero. Blandit libero volutpat sed cras ornare. Suspendisse in est ante in nibh. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.',

            'Enim nec dui nunc mattis enim ut tellus. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Venenatis tellus in metus vulputate eu scelerisque. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Enim tortor at auctor urna nunc id cursus. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Egestas sed tempus urna et. Massa tempor nec feugiat nisl. Orci a scelerisque purus semper eget duis at. Mauris cursus mattis molestie a iaculis at erat pellentesque. Feugiat pretium nibh ipsum consequat nisl vel. Id velit ut tortor pretium viverra suspendisse potenti. Faucibus turpis in eu mi bibendum neque egestas congue.',

            'Pretium fusce id velit ut tortor pretium viverra suspendisse potenti. Dui faucibus in ornare quam viverra. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Laoreet sit amet cursus sit. Feugiat nibh sed pulvinar proin gravida. Ultricies leo integer malesuada nunc vel risus commodo viverra maecenas. Ipsum nunc aliquet bibendum enim. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Maecenas ultricies mi eget mauris pharetra et ultrices. Risus sed vulputate odio ut enim. Id faucibus nisl tincidunt eget nullam non nisi est sit. Massa tempor nec feugiat nisl pretium fusce id velit ut.',

            'Tempus urna et pharetra pharetra massa massa. Odio aenean sed adipiscing diam donec adipiscing. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Sed sed risus pretium quam vulputate dignissim suspendisse in. Eu sem integer vitae justo eget magna fermentum iaculis. Id diam maecenas ultricies mi eget mauris pharetra. Eu volutpat odio facilisis mauris sit amet massa vitae. Gravida arcu ac tortor dignissim convallis aenean et tortor. Adipiscing elit pellentesque habitant morbi tristique senectus et netus. Id neque aliquam vestibulum morbi. Mi eget mauris pharetra et. At tellus at urna condimentum mattis pellentesque id nibh. Tortor at auctor urna nunc id cursus. Molestie ac feugiat sed lectus vestibulum. Ut tristique et egestas quis ipsum suspendisse ultrices. Quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Ullamcorper dignissim cras tincidunt lobortis feugiat.',

            'Odio eu feugiat pretium nibh ipsum consequat nisl vel. Volutpat commodo sed egestas egestas. Tellus integer feugiat scelerisque varius morbi. Malesuada fames ac turpis egestas sed tempus urna et. Varius sit amet mattis vulputate enim nulla aliquet porttitor. Orci a scelerisque purus semper eget duis. Purus semper eget duis at tellus at urna. Ut sem viverra aliquet eget sit. Libero nunc consequat interdum varius sit. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Feugiat vivamus at augue eget arcu dictum varius duis at.',

            'Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Neque gravida in fermentum et sollicitudin ac orci. Et netus et malesuada fames ac turpis egestas. Phasellus vestibulum lorem sed risus ultricies tristique. Sodales ut etiam sit amet nisl purus. Est ullamcorper eget nulla facilisi etiam dignissim. Et netus et malesuada fames ac turpis egestas integer eget. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Id diam vel quam elementum pulvinar. Dui faucibus in ornare quam viverra orci. Nunc eget lorem dolor sed. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Et tortor consequat id porta nibh venenatis. Gravida cum sociis natoque penatibus et magnis. Proin sed libero enim sed faucibus turpis in eu. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Ac auctor augue mauris augue neque gravida in fermentum.',

            'Diam maecenas sed enim ut sem viverra aliquet eget. Ut eu sem integer vitae justo. Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Egestas purus viverra accumsan in nisl nisi scelerisque. Aliquam faucibus purus in massa. Id diam vel quam elementum pulvinar. Odio ut enim blandit volutpat maecenas. Eu ultrices vitae auctor eu. Sollicitudin aliquam ultrices sagittis orci a scelerisque. Quis viverra nibh cras pulvinar mattis. Eget gravida cum sociis natoque penatibus et magnis dis parturient. Orci sagittis eu volutpat odio facilisis mauris sit amet.',

            'Pretium nibh ipsum consequat nisl vel. Nibh mauris cursus mattis molestie a. Facilisis volutpat est velit egestas dui id ornare. Ipsum dolor sit amet consectetur adipiscing elit pellentesque. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Id semper risus in hendrerit gravida. Orci eu lobortis elementum nibh tellus. Fames ac turpis egestas integer eget aliquet. Bibendum ut tristique et egestas quis ipsum suspendisse. Blandit libero volutpat sed cras ornare. Varius quam quisque id diam vel quam elementum pulvinar. Varius sit amet mattis vulputate enim. Leo integer malesuada nunc vel.',

            'Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Praesent semper feugiat nibh sed pulvinar proin gravida. Nam aliquam sem et tortor consequat id. Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Vestibulum lorem sed risus ultricies. Auctor elit sed vulputate mi sit amet mauris. Non tellus orci ac auctor augue mauris augue. Pharetra sit amet aliquam id diam maecenas ultricies. Neque egestas congue quisque egestas. Interdum velit euismod in pellentesque massa placerat duis ultricies. Id velit ut tortor pretium viverra. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Convallis aenean et tortor at risus viverra adipiscing. Amet venenatis urna cursus eget. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Diam in arcu cursus euismod quis viverra nibh cras. Sagittis id consectetur purus ut faucibus. Egestas fringilla phasellus faucibus scelerisque eleifend. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis.',

            'Ante in nibh mauris cursus mattis molestie a iaculis. Ut placerat orci nulla pellentesque dignissim enim sit amet. Sem fringilla ut morbi tincidunt. Urna neque viverra justo nec ultrices. Habitant morbi tristique senectus et netus et malesuada fames. Cras adipiscing enim eu turpis egestas. Netus et malesuada fames ac turpis. A scelerisque purus semper eget duis. Proin libero nunc consequat interdum varius sit. Blandit aliquam etiam erat velit scelerisque in dictum non consectetur.',

            'Tempus imperdiet nulla malesuada pellentesque elit. Ut aliquam purus sit amet luctus. Luctus accumsan tortor posuere ac ut. Est lorem ipsum dolor sit amet consectetur. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Nibh mauris cursus mattis molestie a. Lobortis elementum nibh tellus molestie nunc. Ligula ullamcorper malesuada proin libero. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Elit eget gravida cum sociis. Consectetur adipiscing elit duis tristique sollicitudin nibh sit. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Massa placerat duis ultricies lacus.',

            'Eget dolor morbi non arcu. Proin fermentum leo vel orci. Sit amet est placerat in. Adipiscing vitae proin sagittis nisl rhoncus. Id volutpat lacus laoreet non curabitur gravida arcu. Tortor aliquam nulla facilisi cras fermentum odio eu. Sollicitudin nibh sit amet commodo. Mi quis hendrerit dolor magna eget est lorem ipsum dolor. Faucibus turpis in eu mi bibendum neque egestas congue. Et leo duis ut diam quam. Orci dapibus ultrices in iaculis nunc. Lectus sit amet est placerat in egestas erat. Quisque egestas diam in arcu cursus. Lorem ipsum dolor sit amet consectetur.',

            'Non curabitur gravida arcu ac tortor dignissim. Vitae tortor condimentum lacinia quis vel. Molestie nunc non blandit massa enim nec. Neque viverra justo nec ultrices dui sapien eget. Lorem mollis aliquam ut porttitor leo. Suspendisse sed nisi lacus sed. Ultricies mi eget mauris pharetra et. Est ultricies integer quis auctor elit sed vulputate. Nunc mi ipsum faucibus vitae aliquet nec. Lobortis scelerisque fermentum dui faucibus in. Quis ipsum suspendisse ultrices gravida dictum fusce. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. At urna condimentum mattis pellentesque id nibh. Condimentum lacinia quis vel eros donec ac odio. Sit amet nisl suscipit adipiscing bibendum est ultricies integer quis. Quis imperdiet massa tincidunt nunc.',

            'In hac habitasse platea dictumst quisque sagittis purus sit. Sit amet risus nullam eget. Imperdiet nulla malesuada pellentesque elit eget gravida cum. Sagittis orci a scelerisque purus semper eget duis at. Cras tincidunt lobortis feugiat vivamus at augue eget arcu. Aliquam nulla facilisi cras fermentum odio. In pellentesque massa placerat duis ultricies lacus sed. Vel eros donec ac odio tempor. Ac turpis egestas sed tempus urna et pharetra. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis. Ipsum faucibus vitae aliquet nec ullamcorper. Duis ultricies lacus sed turpis tincidunt id aliquet. At imperdiet dui accumsan sit amet nulla. Ut ornare lectus sit amet est placerat in. Ultrices dui sapien eget mi. Vitae turpis massa sed elementum tempus. Consequat ac felis donec et odio. Gravida arcu ac tortor dignissim convallis aenean et tortor.',

            'Dolor sit amet consectetur adipiscing elit. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Dolor magna eget est lorem ipsum. Eu scelerisque felis imperdiet proin fermentum leo vel. Turpis in eu mi bibendum. Purus non enim praesent elementum facilisis leo vel fringilla. Feugiat nisl pretium fusce id velit ut tortor. A iaculis at erat pellentesque adipiscing commodo. Tincidunt augue interdum velit euismod in pellentesque massa. Ut etiam sit amet nisl purus. Elementum nibh tellus molestie nunc non blandit massa. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Mus mauris vitae ultricies leo integer.',

            'Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Integer quis auctor elit sed vulputate mi sit amet mauris. Consequat ac felis donec et odio pellentesque diam. Vel eros donec ac odio tempor orci. Est placerat in egestas erat imperdiet. Tellus mauris a diam maecenas sed enim ut sem viverra. Ipsum dolor sit amet consectetur adipiscing elit duis tristique. Tellus orci ac auctor augue mauris augue neque. Nec sagittis aliquam malesuada bibendum. Mi quis hendrerit dolor magna.',

            'Vestibulum lectus mauris ultrices eros in cursus. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Duis convallis convallis tellus id interdum velit laoreet id. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. A pellentesque sit amet porttitor eget dolor morbi non. Sagittis nisl rhoncus mattis rhoncus. Neque egestas congue quisque egestas diam in arcu cursus. Viverra ipsum nunc aliquet bibendum enim facilisis gravida. Egestas integer eget aliquet nibh praesent tristique magna sit. Suspendisse interdum consectetur libero id faucibus nisl. Quis lectus nulla at volutpat diam. Porta non pulvinar neque laoreet suspendisse interdum. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Sed viverra ipsum nunc aliquet bibendum.',

        );

        $puppy_pic = [];
        foreach ($puppies as $puppy) {
            $img = new Picture();
            $img->setPath($img_dir . $puppy_dir . $puppy . '.jpg');
            $puppy_pic[] = $img;
            $manager->persist($img);
        }
        $kitten_pic = [];
        foreach ($kittens as $kitten) {
            $img = new Picture();
            $img->setPath($img_dir . $kitten_dir . $kitten . '.jpg');
            $kitten_pic[] = $img;
            $manager->persist($img);
        }

        for ($i = 0; $i < min(count($authors), count($contents)); $i++) {
            $article = new Article();
            $article->setAuthor($authors[$i]);
            $article->setContent($contents[$i]);

            $limit = (rand() % 3) + 1;
            for ($j = 0; $j < $limit; $j++) {
                if ($limit % 2) {
                    $article->addPicture($kitten_pic[$j]);
                } else {
                    $article->addPicture($puppy_pic[$j]);
                }
            }

            $manager->persist($article);
        }

        $manager->flush();
    }
}