cookie is used to recognize the the users
cookie is a small files when the pc request the website acces 


set the cookies:

1. setcookie(name, value, expire, path, domain)l

get the cookies:

using:
echo $_COOKIE["user"]; -> the name of the user 


delete the cookie:

setcookie("user","",time()-3500);