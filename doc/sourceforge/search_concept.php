<html>
  <head>
    <title>Gri Index Search</title>
    <meta name="Copyright" content="2001 Dan Kelley, Dalhousie University, Halifax, Nova Scotia, Canada">
    <meta name="Author" content="Dan Kelley, Dan.Kelley@Dal.Ca">
    <meta name="keywords" content="Gri, graphics, Scientific Computing">
    <LINK rel="stylesheet" href="./gri.css" type="text/css">
  </head>
  
  <body bgcolor=#FFFFFF topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0">


<?php

$index_name = "http://gri.sourceforge.net/gridoc/html/ConceptIndex.html";

# See Ullman (2001, p163) on files.  However, he seems
# to suggest that "fopen" returns nonzero in the case
# where the file exists and can be read.  I don't find that.
# So, I don't test on it, but rather just rely on a PHP
# error if the file doesn't exist.
$index_ponter = fopen($index_name, "r");

# Read the lines of this file, then search for the
# term (but only from lines with two non-breaking  spaces
$items = file($index_name);
#printf("File has %d items\n", count($items));

# Next is an ugly kludge, to avoid getting search "hits" 
# on material that's not in the actual concept index.
$start = 0;
$n = count($items);
for ($i = 0; $i < $n; $i++) {
    if (eregi("<li>", $items[$i])) {
	#print("match at line $i with $items[$i]");
	$start = $i;
	break;
    }
}
# Ullman (2001) p33 
$search_for = trim($search_for); # remove start/end whitespace
print("Return to <a href=\"http://gri.sourceforge.net\">Gri homepage</a>.<p>\n");
print("The following items from the Gri index match your search for <font color=#6666DD>`$search_for'</font>:\n");
$first = 1;
for ($i = $start + 2; $i < $n; $i++) {
    if (eregi($search_for, $items[$i]) 
	and !eregi("href=\"", $items[$i])) {
	if ($first) {
	    print("<ul>\n<li>");
	    $first = 0;
	}
	print($items[$i-1]);
	print($items[$i]);
	# Next line kludges to get proper relative position
	# of the referred-to file.
	$the_ref = $items[$i+1];
	$the_ref = ereg_replace("href=\"", "href=\"gridoc/html/", $the_ref);
	print($the_ref);
	$i++;			# avoid searching on the href line
    }
}
if (!$first) {
    print("</ul>\n");
}


?>

</body>

</html>