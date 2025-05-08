# file_viewmode_token
BackdropCMS Module that translates embedded media tokens into file displays using any viewmode.

Token format is: 
[[{"fid":"$fid","view_mode":"$view_mode"}]]

It includes a template wrapper for embedded files, as well. Rendering of tokens should be backward compatible with tokens embedded via media_wyiwyg module in Drupal 7, but there's a lot of extra junk in those tokens that isn't necessary.  It reads the fid and view_mode and ignores the rest.

I don't plan to maintain this, so do what you will with it!