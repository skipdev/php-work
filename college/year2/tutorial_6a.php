<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
		<style>
		h1 {
			font-family: Comfortaa;
			font-size: 24px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 26.4px;
		}
		h3 {
			font-family: Comfortaa;
			font-size: 14px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 15.4px;
		}
		p {
			font-family: Comfortaa;
			font-size: 14px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 20px;
		}
		blockquote {
			font-family: Comfortaa;
			font-size: 21px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 30px;
		}
		pre {
			font-family: Comfortaa;
			font-size: 13px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 18.5714px;
		}
		</style>
	</head>
	<body>
			
			<form method = "post">
			<p>Enter a string</p>
			<input type='text' name='string'>
			<br>
			<input type='submit' value='Submit'>
			</form>
			
		<?php
			$string = $_POST['string'];
			
			echo "<p>1. Transform a string all uppercase letters.";
			echo "<br>";
			echo "<br>";
			echo strtoupper($string);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "2. Transform a string all lowercase letters.";
			echo "<br>";
			echo "<br>";
			echo strtolower($string);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "3. Make a string's first character uppercase.";
			echo "<br>";
			echo "<br>";
			echo ucfirst($string);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "4. Make a string's first character of all the words uppercase.";
			echo "<br>";
			echo "<br>";
			echo ucwords($string);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "5. Split the following string:";
			echo "<br>";
			echo "Sample string : '082307'";
			echo "<br>";
			$x = '082307'; 
			echo "<br>";
			echo substr(chunk_split($x, 2, ':'), 0, -1);

			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "6. Check if a string contains specific string:";
			echo "<br>";
			echo "Sample string : 'The quick brown fox jumps over the lazy dog.'";
			echo "<br>";
			echo "Check whether the said string contains the string 'jumps'.";
			echo "<br>";
			$y = 'The quick brown fox jumps over the lazy dog.';
			echo "<br>";
			if (strpos($y, 'jumps') == true) {
				echo "YES";
			}
				else echo "NO";
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "7. Extract the file name from the following string:";
			echo "<br>";
			echo "Sample String : 'www.example.com/public_html/index.php'";
			echo "<br>";
			$path = 'www.example.com/public_html/index.php';
			$file = basename($path);
			echo "<br>";
			echo $file;		
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "8. Extract the user name from the following email ID.";
			echo "<br>";
			echo "Sample String : 'rayy@example.com'";
			echo "<br>";
			$email = 'rayy@example.com';
			$user_name = substr($email, 0, strpos($email, '@'));
			echo "<br>";
			echo $user_name;
			
			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "9. Get the last three characters of a string.";
			echo "<br>";
			echo "Sample String : 'rayy@example.com'";
			echo "<br>";
			echo "<br>";
			echo substr($email, -3);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "10. Format values in currency style.";
			echo "<br>";
			echo "Add sample values : value1 = 65.45, value2 = 104.35";
			echo "<br>";
			setlocale(LC_MONETARY, 'en_GB');
			$value1 = 65.45;
			$value2 = 104.35;
			$value3 = $value1 + $value2;
			echo "<br>";
			echo money_format('%i', $value3);

			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "11. Replace the first 'the' of the following string with 'That'.";
			echo "<br>";
			echo "Sample data : 'the quick brown fox jumps over the lazy dog.'";
			echo "<br>";
			echo "<br>";
			echo str_replace("%the%", "That", "%the% quick brown fox jumps over the lazy dog.");
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "12. Find first character that is different between two strings.";
			echo "<br>";
			echo "String1 : 'football'";
			echo "<br>";
			echo "String2 : 'footboll'";
			echo "<br>";
			$first = 'football';
			$second = 'footboll';
			$difference = strspn($first ^ $second, "\0");
			echo "<br>";
			echo 'The first difference between two strings is at position  ' . $difference . ":  ";
			echo $first[$difference] . "  vs  " . $second[$difference]; 
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "13. Put a string in an array. Go to the editor";
			echo "<br>";
			echo "Sample strings : 'Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.'";
			echo "<br>";
			$text = 'Twinkle, twinkle, little star,:How I wonder what you are.:Up above the world so high,:Like a diamond in the sky.';
			$exploded = explode(":",$text);
			print_r($exploded);
			echo "<br>";
			echo "<br>";
			var_dump($exploded);
			echo "<br>";
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "14. Print the next character of a specific character.";
			echo "<br>";
			echo "When 'a' is entered, 'b' will be returned etc.";
			?>
			
			<form method = "post">
			<p>Enter a letter of the alphabet</p>
			<input type='text' name='char'>
			<br>
			<input type='submit' value='Submit'>
			</form>
			
			<?php
			
			$char = $_POST['char'];
			$char2 = ++$char; 
			
			if (strlen($char2) > 1) {
				$char2 = $char2[0]; 
			}
			echo "<p>You entered: " . $_POST['char'];
			echo "<br>";
			echo "The next letter is: " . $char2;

			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo "15. Remove a part of a string from the beginning";
			echo "<br>";
			echo "Sample string : 'rayy@example.com'";
			echo "<br>";
			echo "<br>";
			echo strpbrk($email, "@");
			
			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "16. Insert a string at the specified position in a given string. Original String : 'The brown fox'";
			echo "<br>";
			echo "Insert 'quick' between 'The' and 'brown'.";
			echo "<br>";
			echo "<br>";
			$tbf = 'The brown fox';
			echo substr_replace($tbf, ' quick', 3, 0);
			
			echo "<br>";
			echo "<br>";
			echo "<br>";

			echo "17. Write a PHP script to get the first word of a sentence. Go to the editor";
			echo "<br>";
			echo "Original String : 'The quick brown fox'";
			echo "<br>";
			echo "<br>";
			$tqbf = 'The quick brown fox';
			echo strtok($tqbf, " ");
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			/*18. Write a PHP script to remove all leading zeroes from a string. Go to the editor
			Original String : '000547023.24'
			Expected Output : '547023.24'

			19. Write a PHP script to remove part of a string. Go to the editor
			Original String : 'The quick brown fox jumps over the lazy dog'
			Remove 'fox' from the above string.
			Expected Output : 'The quick brown jumps over the lazy dog'

			20. Write a PHP script to remove trailing slash from a string. Go to the editor
			Original String : 'The quick brown fox jumps over the lazy dog///'
			Expected Output : 'The quick brown fox jumps over the lazy dog'

			21. Write a PHP script to get the characters after the last '/' in an url. Go to the editor
			Sample URL : 'http://www.example.com/5478631'
			Expected Output : '5478631'

			22. Write a PHP script to replace multiple characters from the following string. Go to the editor
			Sample String : '\"\1+2/3*2:2-3/4*3'
			Expected Output : '1 2 3 2 2 3 4 3'

			23. Write a PHP script to select first 5 words from the following string. Go to the editor
			Sample String : 'The quick brown fox jumps over the lazy dog'
			Expected Output : 'The quick brown fox jumps'

			24. Write a PHP script to remove comma(s) from the following numeric string. Go to the editor
			Sample String : '2,543.12'
			Expected Output : 2543.12

			25. Write a PHP script to print letters from 'a' to 'z'. Go to the editor
			Expected Result : abcdefghijklmnopqrstuvwxyz

			http://www.w3resource.com/php-exercises/php-string-exercises.php#sthash.Pk8mPib1.dpuf"
			*/
		?>
	</body>
</html>