<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8" />
		<link rel="Browser-Tab Icon" href="img/icon-list.svg" type="image/svg">

		<!-- Add CSS file -->
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

		<title>Repository 3: About Me - PWP Milestones</title>

	</head>

	<body>

		<!-- This is the header -->
		<header>
			<h1>About Me - PWP Milestones</h1>
		</header>

		<!-- This is the main page content. -->
		<main>

			<!-- Section 1: Persona -->
			<section>

				<h2>Persona</h2>

				<img id="picture-workplace-group" src="img/workplace-group.jpg" alt="Picture of a Group of People in the Workplace">

				<ol>
					<li>
						<b>Quote</b><br>
						<i>"The main way to reduce stress in the workplace is by picking the right people."</i> _&nbsp;Jesse&nbsp;Schell<br>
					</li>
					<li>
						<b>Description</b><br>
						<u>Professional:</u> A person in a workplace that needs help with a website, either from a full-time employee or through a freelance contract.
					</li>
					<li>
						<b>Needs</b><br>
						<ul>
							<li>The website may be in need of an update or a complete overhaul.</li>
							<li>Additionally, it may have not been written to support mobile devices, and so it needs that capability added to it.</li>
							<li>The company has changed what they want to communicate via their website, so they need to update the site accordingly.</li>
							<li>There is a desire to shift from customer payment via PayPal to Stripe.</li>
						</ul>
					</li>
					<li>
						<b>Frustrations</b><br>
						<ul>
							<li>Their website was written many (that is, five) years ago, and it doesn't incorporate all the latest features available through CSS.</li>
							<li>The code was written by a contract web development company, and it is not commented well. So no one at the company really understands how it works, and they don't want to invest the time understanding it if they can pay someone else to do it.</li>
							<li>They feel like they're losing potential customers everyday.</li>
						</ul>
					</li>
					<li>
						<b>Scenarios</b><br>
						<ol>
							<li>They want to expand their market to Africa, and so they want to be compatible with facebook's free basics platform.</li>
							<li>Customers don't want to use PayPal, anymore. They would like to use teir credit cards, directly.</li>
							<li>Many of their customers are now accessing them through mobile devices, and they want their sites to be responsive to mobile devices.</li>
						</ol>
					</li>
				</ol>

			</section>

			<!-- Section 2: Use Case -->
			<section>

				<h2>Use Case</h2>

				<p>The hipster will interact with the site based on the scenarios above. The flowchart below visually depicts the steps they will take while using the site.</p>

				<img  id="diagram-use-case" src="img/about-me-use-case.svg" alt="Flow chart for use case" >

			</section>

			<!-- Section 3: User Interaction Flow -->
			<section>

				<h2>User Interaction Flow</h2>

				<ol>
					<li>If the user wants to know what events are on a specific date, then they search using the calendar.</li>
					<li>If the user wants to know what events of a certain type are going on, then they will check the appropriate boxes for the category of the even they are interested in.</li>
					<li>If the user wants to know what events are related to a specific keyword, then they will use the search box to search the events for those keywords.</li>
				</ol>

			</section>

			<!-- Section 4: Entities -->
			<section>

				<h2>Data Design</h2>

				<h3>Entities</h3>

				<table>
					<tr>
						<th>Entity</th>
						<th>events</th>
						<th>images</th>
						<th>posters</th>
					</tr>
					<tr>
						<th>Attributes</th>
						<td>
							eventId<br>
							eventDateTime<br>
							eventVenue<br>
							eventCategory<br>
							eventDetails
						</td>
						<td>
							posterName<br>
							posterEmail<br>
							posterPhone<br>
							posterEventId
						</td>
						<td>
							imageId<br>
							imageEventId<br>
							imageFilename<br>
							imagePath<br>
						</td>
					</tr>
				</table>

				<h3>Conceptual Model</h3>

				<ol>
					<li>Many <b>events</b> can have many <b>images</b>.</li>
					<li>One <b>poster</b> can post many <b>events</b>.</li>
				</ol>

				<h3>Entity Relationship Diagram</h3>

				<img  id="diagram-entity-relationship" src="img/about-me-erd.svg" alt="Entity Relationship Diagram" >

			</section>

		</main>

	</body>
</html>