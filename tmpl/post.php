<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

<?php if(isset($tmplData['title'])): ?>
		<title><?php echo htmlspecialchars($tmplData['title']) ?></title>
<?php else: ?>
		<title>DataScholars - Data Science, Computer Science, Machine Learning, Artificial Intelligence, Data Mining, Analytics, Visualization</title>
<?php endif; ?>

		<link rel="stylesheet" href="../../../../../3/normalize/normalize.css" />
		<link rel="stylesheet" href="../../../../../screen.css" />
	</head>

	<body>
		<header>
			<h1><a href="http://datascholars.com/">DataScholars</a></h1>
			<nav>
				<ul>
					<li>
						<a href="../../../../../about.html">About</a>
					</li>
					<li>
						<a href="../../../../../subscribe.html">Subscribe</a>
					</li>
					<li>
						<a href="../../../../../sphere.html">Sphere</a>
					</li>
				</ul>
			</nav>
			<p class="blurb">
				A blog about
				<em>data science</em>,
				<em>computer science</em>,
				<em>machine learning</em>,
				<em>artificial intelligence</em>,
				<em>data mining</em>,
				<em>analysis</em>,
				and
				<em>visualization</em>.
			</p>
		</header>

		<article>
			<div class="pubdate">
				<time datetime="<?php echo htmlspecialchars($tmplData['pubdate']) ?>"><?php echo htmlspecialchars(date('F n, Y', strtotime($tmplData['pubdate']))) ?></time>
			</div>
			<h1><?php echo htmlspecialchars($tmplData['title']) ?></h1>
			<address>
				by <a href="<?php echo htmlspecialchars($tmplData['author_href']) ?>"><?php echo htmlspecialchars($tmplData['author_username']) ?></a>
			</address>
			<div>


<?php echo $tmplData['content_markup'] ?>


<?php echo $tmplData['signature_markup'] ?>


			</div>
			<div class="comments">

    <div id="disqus_thread"></div>
    	<script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'datascholars'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

			</div>
		</article>


		<footer>
			<a href="http://twitter.com/DataScholars"><img src="../../../../../i/twitter.png" alit="twitter"></a>
		</footer>


    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'datascholars'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>

	</body>
</html>
