<?php

use Illuminate\Database\Seeder;

class ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ticket::create([
          'id'=>'1',
          'user_id'=>'1',
          'title'=>'Creating New MySQL Database',
          'slug'=>'Creating-New-MySQL-Database',
          'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
          <p>&nbsp;</p>
          <h2>The Earth</h2>
          <p>&nbsp;</p>
          <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
          <p>&nbsp;</p>
          <h3>Houston</h3>
          <p>&nbsp;</p>
          <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
          <ul>
          <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
          <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
          <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
          <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
          </ul>
          <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
          <p>&nbsp;</p>
          <h3>Flight Control</h3>
          <p>&nbsp;</p>
          <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
          <p>&nbsp;</p>
          <ol>
          <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
          <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
          <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
          </ol>
          <p>&nbsp;</p>
          <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
          <p>&nbsp;</p>
          <h2>The Future</h2>
          <p>&nbsp;</p>
          <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
          <blockquote>
          <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
          </blockquote>
          <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
          <div class="widget widget-info widget-important">
          <div class="title">Important:</div>
          There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
          From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
          <p>&nbsp;</p>
          <h2>What’s Next</h2>
          <p>&nbsp;</p>
          <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
          <div class="widget widget-info">
          <div class="title">Note:</div>
          To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
          The Earth is a very small stage in a vast cosmic arena.</div>',
           'category_id'=>'1',
           'sub_category_name'=>'Introduction',
           'added_tags'=>'12,11,13,',
           

        ]);
        \App\ticket::create([
            'id'=>'2',
            'user_id'=>'1',
            'title'=>'How to Backup Large MySQL Databases',
            'slug'=>'How-to-Backup-Large-MySQL-Databases',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'2',
             'sub_category_name'=>'Introduction',
             'added_categories'=>'2,3,5,',
             'added_tags'=>'12,11,13,',
             
  
          ]);
          \App\ticket::create([
            'id'=>'3',
            'user_id'=>'1',
            'title'=>'How to Access the Spam Folder',
            'slug'=>'How-to-Access-the-Spam-Folder',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'3',
             'sub_category_name'=>'Introduction',
             'added_categories'=>'1,3,4,',
             'added_tags'=>'12,11,13,',
             
  
          ]);
          \App\ticket::create([
            'id'=>'4',
            'user_id'=>'1',
            'title'=>' How to Migrate Emails',
            'slug'=>' How-to-Migrate-Emails',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'3',
             'sub_category_name'=>'Introduction',
             'added_categories'=>'3,2,5,',
             'added_tags'=>'22,55,13,',
             
  
          ]);
          \App\ticket::create([
            'id'=>'5',
            'user_id'=>'1',
            'title'=>'How Secure Is My Password?',
            'slug'=>'How-Secure-Is-My-Password',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'3',
             'sub_category_name'=>'Introduction',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'6',
            'user_id'=>'1',
            'title'=>'How to use this documentation?',
            'slug'=>'How-to-use-this-documentation',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'7',
            'user_id'=>'1',
            'title'=>'Can I Use My Android Phone?',
            'slug'=>'can-i-use-my-android-phone',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'4',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'8',
            'user_id'=>'1',
            'title'=>'How do I change or update account passwords?',
            'slug'=>'How-do-I-change-or-update-account-passwords',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'5',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'9',
            'user_id'=>'1',
            'title'=>'Multiple installs on one domain',
            'slug'=>'Multiple-installs-on-one-domain',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'5',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'10',
            'user_id'=>'1',
            'title'=>'Getting Started & What is next.',
            'slug'=>'Getting-Started-& What-is-next.',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'6',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'11',
            'user_id'=>'1',
            'title'=>'Preparing your server for installation',
            'slug'=>'Preparing-your-server-for-installation.',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'6',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'12',
            'user_id'=>'2',
            'title'=>'Can I attach files to forms?',
            'slug'=>'Can-I-attach-files-to-forms',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'6',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'13',
            'user_id'=>'2',
            'title'=>'How do I contact Customer Care?',
            'slug'=>'How-do-I-contact-Customer-Care',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'14',
            'user_id'=>'2',
            'title'=>'How do I contact Customer Care?',
            'slug'=>'How-do-I-contact-Customer-Care',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'15',
            'user_id'=>'2',
            'title'=>'Why Was My Developer Application Rejected?',
            'slug'=>'Why-Was-My-Developer-Application-Rejected',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'3',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'16',
            'user_id'=>'2',
            'title'=>'Setting up attributes',
            'slug'=>'Setting-up-attributes',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'4',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'17',
            'user_id'=>'2',
            'title'=>'How Secure Is My Password?',
            'slug'=>'How-Secure-Is-My-Password',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'18',
            'user_id'=>'2',
            'title'=>'Logging into the Admin Area',
            'slug'=>'Logging-into-the-Admin-Area',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'2',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'19',
            'user_id'=>'2',
            'title'=>'Why is my account suspended?',
            'slug'=>'Why-is-my-account-suspended',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'20',
            'user_id'=>'2',
            'title'=>' Shipping Options Page',
            'slug'=>' Shipping-Options-Page',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'21',
            'user_id'=>'2',
            'title'=>' Manual Payment Methods',
            'slug'=>' Manual-Payment-Methods',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Import & Export ',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'22',
            'user_id'=>'2',
            'title'=>' Recurring Payments',
            'slug'=>'Recurring-Payments',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'5',
             'sub_category_name'=>'Import & Export ',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'23',
            'user_id'=>'2',
            'title'=>' Using my credit',
            'slug'=>'Using-my-credit',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'6',
             'sub_category_name'=>'Import & Export',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'24',
            'user_id'=>'2',
            'title'=>' How do I update my credit card?',
            'slug'=>' How-do-I-update-my-credit-card',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'6',
             'sub_category_name'=>'Import & Export',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'25',
            'user_id'=>'2',
            'title'=>' Billing information',
            'slug'=>' Billing-information',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'5',
             'sub_category_name'=>'Import & Export ',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'26',
            'user_id'=>'2',
            'title'=>'How do I set a featured image on a post?',
            'slug'=>' How-do-I-set-a-featured-image-on-a-post',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Settings & Configuration',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'27',
            'user_id'=>'1',
            'title'=>'How do I add a “Blog” page?',
            'slug'=>' How-do-I-add-a-Blog-page',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'2',
             'sub_category_name'=>'Settings & Configuration',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'28',
            'user_id'=>'1',
            'title'=>' How do I upload my own logo image?',
            'slug'=>' How-do-I-upload-my-own-logo-image',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'5',
             'sub_category_name'=>'Settings & Configuration  ',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'29',
            'user_id'=>'1',
            'title'=>' How do I hide an element in the theme?',
            'slug'=>' How-do-I-hide-an-element-in-the-theme',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Settings & Configuration ',
             'added_categories'=>'1,6,4',
             'added_tags'=>'65,22,44,',
             
  
          ]);
          \App\ticket::create([
            'id'=>'30',
            'user_id'=>'2',
            'title'=>'How do you customize the navigation?',
            'slug'=>'How-do-you-customize-the-navigation',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world. To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.</p>
            <p>&nbsp;</p>
            <h2>The Earth</h2>
            <p>&nbsp;</p>
            <p>Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love, everyone you know, everyone you ever heard of,<strong> every human being</strong> who ever was, lived out their lives. The aggregate of our joy and suffering, thousands of confident religions, ideologies, and economic doctrines, every hunter and forager, every hero and coward, every creator and destroyer of civilization, every king and peasant, every young couple in love, every mother and father, hopeful child, inventor and explorer, every teacher of morals, every corrupt politician, every “superstar,” every “supreme leader,” every saint and sinner in the history of our species lived there–on a mote of dust suspended in a sunbeam.</p>
            <p>&nbsp;</p>
            <h3>Houston</h3>
            <p>&nbsp;</p>
            <p>that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.</p>
            <ul>
            <li>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</li>
            <li>A good rule for rocket experimenters to follow is this: always assume that it will explode.</li>
            <li>Let’s light this fire one more time, Mike, and witness this great nation at its best.</li>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            </ul>
            <p>The view of the Earth from the Moon fascinated me—a small disk, 240,000 miles away. It was hard to think that that little thing held so many problems, so many frustrations. Raging nationalistic interests, famines, wars, pestilence don’t show from that distance.</p>
            <p>&nbsp;</p>
            <h3>Flight Control</h3>
            <p>&nbsp;</p>
            <p>From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.</p>
            <p>&nbsp;</p>
            <ol>
            <li>It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be articulate when your mind’s blown—but in a very good way.</li>
            <li>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</li>
            <li>The surface is fine and powdery. I can kick it up loosely with my toe.</li>
            </ol>
            <p>&nbsp;</p>
            <p>The vehicle explodes, literally explodes, off the pad. The simulator shakes you a little bit, but the actual liftoff shakes your entire body and soul.</p>
            <p>&nbsp;</p>
            <h2>The Future</h2>
            <p>&nbsp;</p>
            <p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
            <blockquote>
            <p>Houston, that may have seemed like a very long final phase. The autotargeting was taking us right into a … crater, with a large number of big boulders and rocks … and it required … flying manually over the rock field to find a reasonably good area.I saw for the first time the earth’s shape. I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black. . . the feelings which filled me I can express with one word—joy.</p>
            </blockquote>
            <p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.</p>
            <div class="widget widget-info widget-important">
            <div class="title">Important:</div>
            There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</div>
            From this day forward, Flight Control will be known by two words: ‘Tough’ and ‘Competent.’ Tough means we are forever accountable for what we do or what we fail to do. We will never again compromise our responsibilities. Every time we walk into Mission Control we will know what we stand for. Competent means we will never take anything for granted. We will never be found short in our knowledge and in our skills. Mission Control will be perfect. When you leave this meeting today you will go to your office and the first thing you will do there is to write ‘Tough and Competent’ on your blackboards. It will never be erased. Each day when you enter the room these words will remind you of the price paid by Grissom, White, and Chaffee. These words are the price of admission to the ranks of Mission Control.
            <p>&nbsp;</p>
            <h2>What’s Next</h2>
            <p>&nbsp;</p>
            <p>It has been said that astronomy is a humbling and character-building experience. There is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.</p>
            <div class="widget widget-info">
            <div class="title">Note:</div>
            To me, it underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale blue dot, the only home we’ve ever known.</div>
            The Earth is a very small stage in a vast cosmic arena.</div>',
             'category_id'=>'1',
             'sub_category_name'=>'Settings & Configuration',
             'added_categories'=>'1,2,3,5',
             'added_tags'=>'32,21,43,',
             
  
          ]);
          \App\ticket::create([
            'id'=>'31',
            'user_id'=>'2',
            'title'=>'My SQL أنشاء قاعدة بيانات جديدة ',
            'slug'=>'My-SQL-أنشاء-قاعدة-بيانات-جديدة',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة :</div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'7',
             'sub_category_name'=>'Introduction',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'32',
            'user_id'=>'1',
            'title'=>'كيفية الولوج الى ملفات السبام',
            'slug'=>'كيفية-الولوج-الى-ملفات-السبام',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'8',
             'sub_category_name'=>'Introduction',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'33',
            'user_id'=>'1',
            'title'=>'النسخ الاحتياطي لقاعدة البيانات',
            'slug'=>'النسخ-الاحتياطي-لقاعدة-البيانات',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'7',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'34',
            'user_id'=>'1',
            'title'=>'الى أي درجة كلمة السر خاصتي قوية  ',
            'slug'=>'الى-أي-درجة-كلمة-السر-خاصتي-قوي',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'9',
             'sub_category_name'=>'Installation',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'35',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'8',
             'sub_category_name'=>'Settings & Configuration',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'36',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'9',
             'sub_category_name'=>'Settings & Configuration',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'37',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'9',
             'sub_category_name'=>'Import & Export',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'38',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'11',
             'sub_category_name'=>'Import & Export',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'39',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'11',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'40',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'9',
             'sub_category_name'=>'Shipping',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'41',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'10',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
          \App\ticket::create([
            'id'=>'42',
            'user_id'=>'2',
            'title'=>'كيف يمكنني استخدام هاته الوثائق ',
            'slug'=>'كيف-يمكنني-استخدام-هاته-الوثائق',
            'language'=>'arabic',
            'details'=>'<div class="article-body" updatearticlelinks=""><p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير. بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه. الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة. فكروا في أنهار دماء امتدها كل هؤلاء الجنرالات والأباطرة ، حتى يتمكنوا ، في المجد والنصر ، من أن يصبحوا أسياد لحظة لجزء من النقطة. فكر في القسوة التي لا نهاية لها التي زارها سكان أحد أركان هذه البكسل على السكان الذين لا يمكن تمييزهم عن بعض الزاوية الأخرى ، ومدى تكرار سوء فهمهم ، وكيف يتوقون إلى قتل بعضهم البعض ، وكيف يتغذون على كراهيتهم.</p>
            <p>&nbsp;</p>
            <h2>الأرض</h2>
            <p>&nbsp;</p>
            <p>كل شخص تعرفه ، كل شخص تعرفه ، كل شخص سمعته ، <strong> كل إنسان </ strong> كان في أي وقت مضى ، عاش حياتهن. مجموع فرحتنا ومعاناتنا ، والآلاف من الأديان والايديولوجيات والمذاهب الاقتصادية الواثقة ، كل صياد ومروج ، وكل بطل وجبان ، وكل مبدع ومدمر للحضارة ، وكل ملك وفلاح ، وكل زوجين شابين في الحب ، وكل أم و الأب ، والطفل المتفائل ، والمخترع والمستكشف ، وكل معلم من الأخلاق ، وكل سياسي فاسد ، وكل "سوبرستار" ، وكل "قائد أعلى" ، كان كل قديس وخاطئ في تاريخ جنسنا يعيش هناك - على قرص من الغبار معلقة في شعاع الشمس.</p>
            <p>&nbsp;</p>
            <h3>هيوستن</h3>
            <p>&nbsp;</p>
            <p>قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول.</p>
            <ul>
            <li>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</li>
            <li>القاعدة الجيدة التي يجب على متجربى الصواريخ اتباعها هى: افترض دائما أنها سوف تنفجر.</li>
            <li>دعونا نضيء هذا الحريق مرة أخرى ، مايك ، ونشهد هذه الأمة العظيمة في أفضل حالاتها.</li>
            <li>انها مجرد عقل مذهل. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون مفصلاً عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا.</li>
            </ul>
            <p>لقد جذبتني رؤية الأرض من القمر - قرص صغير ، على بعد 240 ألف ميل. كان من الصعب أن نفكر أن هذا الشيء القليل عقد الكثير من المشاكل ، الكثير من الإحباطات. لم تظهر المصالح القومية المستعرة والمجاعات والحروب والأوبئة من تلك المسافة.</p>

            بالنسبة لي ، فإنه يؤكد على مسؤوليتنا في التعامل بشكل أفضل            <p>&nbsp;</p>
            <h3>التحكم في الطيران</h3>
            <p>&nbsp;</p>
            <p> من اليوم الحالي ، سيعرف التحكم في الطيران بكلمتين: "صعبة" و "مختصة". يعني هذا أننا متحمسون إلى الأبد بسبب ما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة. </ p>            <p>&nbsp;</p>
            <ol>
            <li> إنه أمر مذهل تمامًا. أعتذر ، وأتمنى أن أكون أكثر وضوحًا ، ولكن من الصعب أن تكون واضحًا عندما ينفجر ذهنك - ولكن بطريقة جيدة جدًا. </ li>
                         <li> تنفجر السيارة ، تنفجر حرفياً ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح. </ li>
                         <li> السطح ناعم ومساحيق. يمكنني رميه بشكل فضفاض مع إصبع قدمي. </ li>
            </ol>
            <p>&nbsp;</p>
            <p>تنفجر السيارة ، تنفجر حرفيا ، خارج اللوحة. محاكي يهز لك قليلا ، ولكن الرفع الفعلي يهز الجسم كله والروح.</p>
            <p>&nbsp;</p>
            <h2>المستقبل</h2>
            <p>&nbsp;</p>
            <p>أنا غريب لقد جئت في سلام. خذني إلى قائدك وستكون هناك مكافأة ضخمة لك في الأبدية.</p>
            <blockquote>
            <p>هيوستن ، قد يبدو وكأنه مرحلة نهائية طويلة جدًا. كان الاستهداف التلقائي يأخذنا مباشرة إلى فوهة البركان ، مع وجود عدد كبير من الصخور الكبيرة والصخور ... وكان ذلك مطلوبًا ... تحلق يدويًا فوق حقل الصخور للعثور على منطقة جيدة بشكل معقول. لقد رأيت لأول مرة شكل الأرض. استطعت بسهولة رؤية شواطئ القارات ، الجزر ، الأنهار العظيمة ، طيات التضاريس ، المسطحات المائية الكبيرة. الأفق أزرق داكن ، يتحول بسلاسة إلى اللون الأسود. . . المشاعر التي ملأتني أستطيع التعبير عنها بكلمة واحدة - الفرح.</p>
            </blockquote>
            <p> تتحدى هذه الأنماط من الضوء الباهت عملياتنا البريدية ، وأهميتنا الذاتية المتخيلة ، والوهم الذي نتمتع به بعض المواقع المميزة في الكون. كوكبنا هو ذرة وحيدة في الظلام الكوني العظيم المغلف. في غموضنا ، في كل هذا الاتساع ، ليس هناك أي تلميح بأن المساعدة ستأتي من مكان آخر لإنقاذنا من أنفسنا. </ p>
            <div class="widget widget-info widget-important">
            <div class="title">مهم جدا:</div>
            ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</div>
            من هذا اليوم إلى الأمام ، سيعرف التحكم بالطيران بكلمتين: "صعبة" و "مختصة". يعني ذلك أننا خضوع للمساءلة إلى الأبد عما نفعله أو ما لا نفعله. لن نساوم مرة أخرى على مسؤولياتنا. في كل مرة نسير فيها إلى مركز التحكم في المهمة ، سنعرف ما ندافع عنه. يعني الاختصاص أننا لن نأخذ أي شيء كأمر مسلم به. لن يتم العثور علينا قصيرا في معرفتنا ومهاراتنا. مهمة التحكم ستكون مثالية. عندما تغادر هذا الاجتماع اليوم ، سوف تذهب إلى مكتبك ، وأول شيء ستقوم به هو أن تكتب "صعبة ومنافسة" على السبورات الخاصة بك. لن يتم محوها. في كل يوم عند دخولك الغرفة ، ستذكرك هذه الكلمات بالسعر الذي يدفعه Grissom و White و Chaffee. هذه الكلمات هي سعر القبول في صفوف مراقبة البعثة.            <p>&nbsp;</p>
            <h2>ماذا بعد؟</h2>
            <p>&nbsp;</p>
            <p>لقد قيل أن علم الفلك هو تجربة تواضع وبناء الشخصية. ربما لا يوجد دليل أفضل على حماقة الإنسان من هذه الصورة البعيدة لعالمنا الصغير.</p>
            <div class="widget widget-info">
            <div class="title">ملحوظة : </div>
            بالنسبة لي ، فهي تؤكد على مسؤوليتنا في التعامل مع بعضنا البعض بشكل أفضل ، والمحافظة على النقطة الزرقاء الشاحبة والاعتناء بها ، وهو المنزل الوحيد الذي عرفناه.</div>
            الأرض هي مرحلة صغيرة جدا في الساحة الكونية الضخمة.</div>',
             'category_id'=>'12',
             'sub_category_name'=>'Billing',
             
             
  
          ]);
    }
}
