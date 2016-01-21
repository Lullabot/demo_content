<?php

/**
 * @file
 * Contains \Drupal\demo_news\Plugin\EmbeddedContent\Tweets.
 */

namespace Drupal\demo_news\Plugin\EmbeddedContent;

use Drupal\demo_news\EmbeddedContentBase;
use Drupal\demo_news\EmbeddedContentInterface;

/**
 * Provides an EmbeddedContent plugin.
 *
 * @EmbeddedContent(
 *   id = "embedded_tweets",
 *   label = @Translation("Embedded Tweets"),
 * )

 */
class Tweets extends EmbeddedContentBase implements EmbeddedContentInterface {

  /**
   * {@inheritdoc}
   */
  function getList() {
    return [
      '<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>STAGES OF WORKING FROM HOME
      - Yay I get to work from home
      - It would be nice to talk to people
      - I hope that pigeon sits in the window today</p>
      		&mdash; Mark Agee (@MarkAgee)
      		<a href="https://twitter.com/BuzzFeed/status/620990471720992768"></a>
      	</blockquote>',

      '<blockquote class="twitter-tweet" lang="en"><p lang="en" dir="ltr">STAGES OF WORKING FROM HOME&#10;- Yay I get to work from home&#10;- It would be nice to talk to people&#10;- I hope that pigeon sits in the window today</p>&mdash; Mark Agee (@MarkAgee) <a href="https://twitter.com/MarkAgee/status/620990471720992768">July 14, 2015</a></blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '	<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>When youre getting along with your coworker then they take it too far &amp; hit the "we should hangout outside of work"</p>
      		&mdash; Marissa Brown (@SoonSun_)
      		<a href="https://twitter.com/BuzzFeed/status/681214143140069379"></a>
      	</blockquote>',

      '<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>STAGES OF WORKING FROM HOME
      - Yay I get to work from home
      - It would be nice to talk to people
      - I hope that pigeon sits in the window today</p>
      		&mdash; Mark Agee (@MarkAgee)
      		<a href="https://twitter.com/BuzzFeed/status/620990471720992768"></a>
      	</blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '	<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>Accidentally made eye contact w/co-worker thru bathroom stall door crack. Didn\'t know what to do so I blew him a kiss</p>
      		&mdash; Mayor P (@punmagnate)
      		<a href="https://twitter.com/BuzzFeed/status/369490381131354115"></a>
      	</blockquote>',

      '	<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>interviewer: do you have any experience in a leadership role?

      me: well, I am the group admin for a WhatsApp group</p>
      		&mdash; beth phoenix (@jaeceratops)
      		<a href="https://twitter.com/BuzzFeed/status/672041643055390720"></a>
      	</blockquote>',

      '	<blockquote class="twitter-tweet bf-tweet" data-conversation="none">
      		<p>"It\'s five o\'clock somewhere" I say as I leave work at 9am</p>
      		&mdash; GaryHotmail (@MichaelSmartGuy)
      		<a href="https://twitter.com/BuzzFeed/status/425262945615228928"></a>
      	</blockquote>',

      '	<blockquote class="bf-tweet" data-conversation="none">
      		<p>The sexiest fantasy in 50 Shades Of Grey is the bit where she gets a job in journalism without having to do years of unpaid work experience.</p>
      		&mdash; Periwinkle Jones (@peachesanscream)
      		<a href="https://twitter.com/BuzzFeed/status/567419175795425280"></a>
      	</blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '	<blockquote class="bf-tweet" data-conversation="none">
      		<p>When you make your girl mad in the morning her work husband be waiting on her like</p>
      		&mdash; X (@Linuxtherebel)
      		<a href="https://twitter.com/BuzzFeed/status/637613317197053952"></a>
      	</blockquote>',

      '	<blockquote class="bf-tweet" data-conversation="none">
      		<p>A secret rendezvous...
      But it\'s me, alone, in the snack closet at work.</p>
      		&mdash; Aimee Helene (@AimeeHelene1)
      		<a href="https://twitter.com/BuzzFeed/status/681938169688907776"></a>
      	</blockquote>',

      '	<blockquote class="bf-tweet" data-conversation="none">
      		<p>I did squats today. Mostly because I was hiding from a coworker.</p>
      		&mdash; Gracie Fabulous (@MermaidintheUSA)
      		<a href="https://twitter.com/BuzzFeed/status/618142935381639168"></a>
      	</blockquote>',

      '	<blockquote class="bf-tweet" data-conversation="none">
      		<p>Brings donuts to work because if I can\'t be skinny neither can you.</p>
      		&mdash; Miss Kerri (@kwirkyKerri)
      		<a href="https://twitter.com/BuzzFeed/status/658241621536837632"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>I hate my job. The work sucks. The people suck. The pay sucks.
      *looks up and sees motivational poster on wall*
      Well this changes everything</p>
      		&mdash; Bucky Isotope (@BuckyIsotope)
      		<a href="https://twitter.com/BuzzFeed/status/663909140855582720"></a>
      	</blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>Our boss just banned overly specific nicknames and the whole office is staring at Rat Snitch Brian The Good Time Ruiner.</p>
      		&mdash; Ceej (@ceejoyner)
      		<a href="https://twitter.com/BuzzFeed/status/554661387704999936"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>Applications be like
      "Why should I hire you?" 😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐😐

      Me: because your hiring</p>
      		&mdash; ⏬‍SONO⏬ (@sonofzuez)
      		<a href="https://twitter.com/BuzzFeed/status/618907888572981248"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>I told all my colleagues at work that I have a twin so that when I see them in public I don\'t have to talk to them.</p>
      		&mdash; Sweet Slips (@Ndeshi_M)
      		<a href="https://twitter.com/BuzzFeed/status/598714738747559936"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>Starting a blog that\’s just reviews of the food I steal out of the fridge at work.</p>
      		&mdash; Underchilde (@Underchilde)
      		<a href="https://twitter.com/BuzzFeed/status/633316520354054145"></a>
      	</blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>The problem with teaching a man to fish is that eventually somebody will microwave that fish in the work break room.</p>
      		&mdash; mark (@TheCatWhisprer)
      		<a href="https://twitter.com/BuzzFeed/status/554706530571145216"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>Adorable idea. Colleagues have been writing names on their food in the office fridge. I am currently eating a yoghurt called Debbie</p>
      		&mdash; Mrs Joshua Homme (@FussySaffa)
      		<a href="https://twitter.com/BuzzFeed/status/10983931671"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>i want to work in this restaurant</p>
      		&mdash; meat bone (@bonerman_inc)
      		<a href="https://twitter.com/BuzzFeed/status/569268994001088512"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>[waiting for elevator]
      Coworker: Hey, how\'s it go-
      Me: I\'ll take the stairs.</p>
      		&mdash; moody monday (@mdob11)
      		<a href="https://twitter.com/BuzzFeed/status/548479207311826944"></a>
      	</blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>[At supermarket]
      "Excuse me do you work here?"
      WHAT? ME? Work HERE? Hell no. I went to college. I don\'t have a job</p>
      		&mdash; Ristolable (@Ristolable)
      		<a href="https://twitter.com/BuzzFeed/status/545649727338192897"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>When in doubt, ask yourself WWBD: What Would Beyoncé Do? Would she apply for a job? Nope. She\'d just show up one day like "I work here now."</p>
      		&mdash; Jamie Woodham (@jwoodham)
      		<a href="https://twitter.com/BuzzFeed/status/543260508262903808"></a>
      	</blockquote>',

      '<blockquote class="bf-tweet" data-conversation="none">
      		<p>*walks into university &amp; grabs intercom*
      "IT\'S ALL LIES. THAT ENGLISH DEGREE IS USELESS"
      *fighting noises*
      "YOU\'RE GOING TO WORK FOR TARGET"</p>
      		&mdash; Carly Danger (@carlyken)
      		<a href="https://twitter.com/BuzzFeed/status/542341417163816960"></a>
      	</blockquote>',
    ];
  }

}