## FooDog 
### Fictive Wordpress site for alimentation dog food. 

### TEAM 
- David Bouzouita
- [Gary Petrovski](https://github.com/GaryPetrovski)
- [Dylan Maghe](https://github.com/Dylan-Maghe)
- [Anne Cécile](https://github.com/AnneCecileRiquet) 

## Challenge description
Make a Wordpress Template for fictif blog alimentation for dog. Follow instruction and layout imposed.

[Instruction and layout](https://github.com/becodeorg/CRL-Turing-2.6/tree/master/Projects/Foodog).

### Our choice 
Blank template [Jointswp](http://jointswp.com/).
This template using good composition folders (assets), Gulp, Foundation.

Agile & scrum using [board](https://github.com/bouzouitadavid/FooDog-WP/projects/1).

### Resume
Good experience on team working, each person realize this job and lean to use all standard function in Wordpress and learn to use new framework.
Our have learn the bad usage and right usage, ready for the next challenge.  

## Only for TEAM
### For Using this Github Wordpress
#### First step :
Make a mysql bdd, import my bdd into your new bdd.
```
git clone https://github.com/bouzouitadavid/FooDog-WP
cd FooDog-WP
open wp-config.php
```
#### Two step :
Find this line and modifie to
 - define('DB_NAME', '**YOUR_BDD_NAME**');
 - define('DB_USER', '**YOUR_ACCES_USER**');
 - define('DB_PASSWORD', '**YOUR_ACCES_PASSWORD**');

Open FooDog-WP into your favorite navigator.

### For working
```
cd FooDog-WP/wp-content/themes/JointsWP-master
npm run watch
```
*This line compile and watch all change in your SCSS folder.*

Or use Browsersync 
```
$ npm run browsersync
```
For more info check [Here](http://jointswp.com/docs/getting-started-sass/). Orignal Doc.

# Thank's
Thank's for all at [BeCode](https://becode.org/) for experience and time with you.
