<!DOCTYPE html>
<html>
	<head>
		<title>MVC example</title>
	</head>
<body>

	<header>
		<h1>Abandon hope, all ye that enter this place</h1>
	</header>

	{% if user %}
		<header>
			<h2>User {{ user.id }} </h2>
		</header>

		<p>Username: {{ user.username }}</p>

		<p>Email: {{ user.useremail }}</p>

	{% else %}

		<p>User {{ user.id }} not found</p>

	{% endif %}

</body>
</html>