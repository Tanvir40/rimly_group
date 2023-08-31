<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mails</title>
		<style type="text/css">
			*{
				padding: 0;
				margin: 0;
				outline: 0;
			}
			body{
				background: #ddd;
			}
			table{
				background: #fff;
				margin: 0 auto;
				padding: 50px 20px;
				border-radius: 5px;
				font-size: 16px;
				line-height: 24px;
				text-align: justify;
			}
			table tr td{
				vertical-align: top;
			}
		</style>

	</head>
	<body >
		<table width="60%">
			<tbody>
				<tr>
					<td>Name</td>
					<td width="10%" style="text-align: center;">:</td>
					<td>{{$data['name']}}</td>
				</tr>

				<tr>
					<td width="">Email</td>
					<td width="10%" style="text-align: center;">:</td>
					<td><a href="mailto:{{$data['email']}}">{{$data['email']}}</a></td>
				</tr>

				<tr>
					<td width="">Subject</td>
					<td width="10%" style="text-align: center;">:</td>
					<td>{{$data['subject']}}</td>
				</tr>

				<tr>
					<td width="">Message</td>
					<td width="10%" style="text-align: center;">:</td>
					<td>{{$data['message']}}</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>


