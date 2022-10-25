SoundExchange PHP
==================================================

What you need to manipulate audio in PHP
----------------------------------------

Requirements

1. PHP 5

2. sox installed on your server
	http://sox.sourceforge.net/
	Linux (Ubuntu): sudo apt-get install sox
	Max OS X: sudo port install sox
	
Optional

1. lame mp3 encoder
	http://lame.sourceforge.net/

What you get
------------

SoundExchange PHP is an easy to use library which wraps common sox calls.  To use SoundExchange include the SoundExchange.php src file in your website and make some calls to included functions. Use any of the static members to convert, trim, & normalize audio files.  Some bundled convenience methods are also included, for instance the preview() method which creates a normalized short preview file of the supplied audio file.

For advanced users you can use the generic sox() call and supply your own commands.  It is not recommended to use this function unless you are familiar with how to use sox on the command line.

Demo
----

See demo/demo.php for examples on how to use SoundExchange

Unit Testing
------------

Run the php unit tests by running 'phpunit tests/SoundExchangeTest.php' on the command line.  phpunit must be installed to work.

Troubleshooting
---------------

If you have trouble using the script be sure that sox is properly installed on your server.  Try sox --combine concatenate file1.mp3 file2.mp3 outputFile.mp3, it should add a new file which places file1 and file2 end to end.  You might also run the phpunit test script supplied to help debug.
