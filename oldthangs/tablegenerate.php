<html>

	<head>
	</head>

	<body>
		<?php
			$maxcols = 7; 
			$maxid = 112;
			$startid = 1;

			echo "<table id='table1'>\n";
			for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {

			    echo "<tr>\n";
			    for ($j=1;$j<=$maxcols;$j++)
			        if ($startid <= $maxid)
			            echo "  <td class='mark'>ID".$startid++."</td>\n";
			        else 
			            echo "  <td> </td>\n";

			    echo "</tr>\n<tr>\n";
			    for ($j=1;$j<=$maxcols;$j++)
			        echo "<td>Content</td>\n";

			    echo "</tr>\n";
			}

			echo "</table>\n";

		?>
	</body>

</html>