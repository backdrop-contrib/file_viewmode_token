# File Viewmode Token
Backdrop Module that translates embedded media tokens into file displays using any view mode.

Token format is: 
[[{"fid":"$fid","view_mode":"$view_mode"}]]

It includes a template wrapper for embedded files, as well. Rendering of tokens should be backward compatible with tokens embedded via media_wyiwyg module in Drupal 7, but there's a lot of extra junk in those tokens that isn't necessary.  It reads the fid and view_mode and ignores the rest.

Inspired by the token portion of the FEEF module: https://backdropcms.org/project/feef

Looking for a maintainer or someone to add this to a more robust media embedding project.