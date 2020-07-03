
<?php /* Template Name: About */ ?>

<?php get_header();

	while ( have_posts() ) {
		the_post(); ?>
<div class="wrapper">
    <div class="inner-page-banner">
        <img src="https://res.cloudinary.com/campusxchange/image/upload/v1547482178/Lindores%20and%20Griffin/about-header-4-1024x354-compressor.jpg" alt="about us page banner">
    </div>
    <div class="content">
        <div class="content__inner">
            <h1 class="content--title">About Us</h1>
            <div class="content__container">
                <p>Lindores & Griffin is a data-driven, results-oriented digital marketing agency serving industry leading clients. We optimise our client’s digital presence and deliver effective, targeted advertisements to drive website traffic, convert visitors into leads, and improve your sales to ensure a return on investment for your marketing budget. We specialise in the marketing of high valued products from Classic Cars and Supercars to Yachts, Motorcycles & Motorhomes.</p>
                <p>We are a customer-centric company and feel great satisfaction in giving our clients access to the same real time analytics we obtain. Our years of personal experience within the luxury car market has taught us the importance for professionalism involved when operating with high profile, high value products. We therefore not only provide complete discretion with you, but also with your clients.</p>
                <p>Our focus is on growing your business by leveraging digital marketing. We are far more than a colourful, flashy marketing agency. We know how to run diverse campaigns enabling our clients to source or sell high valued stock. Understanding advertising and sourcing features takes skill, time and constant analysis, which is why our clients outsource to us. We pride ourselves on the deep understanding of website development and optimisation. It is essential to understand the funnelling process in social media marketing, and ensure to involve it in any plan we offer.</p>
                <p>Our desire is to become the most trusted digital marketing agency in Cornwall, for the £1M+ turnover businesses that cannot afford a digital marketing strategy which does not provide results. We operate from the Academy of Innovation and Research, a hub at the forefront of Cornwall's research programs and are available for meeting by appointment whenever it suits you.</p>        </div>
        </div>
        <div class="content__profiles">
            <div class="content__column">
                <div class="content__container">
                    <div class="testimonial">
                        <div alt="a profile picture of Taylor Lindores Reeves, director of Lindores & Griffin driving a BMW X5" class="profile profile--taylor"></div>
                        <h4 class="testimonial--excerpt">TECHNICAL DIRECTOR</h4>
                        <h1 class="testimonial--name">TAYLOR LINDORES-REEVES</h1>
                        <p class="testimonial--desc">Taylor is the technical director of this company, which he loves, and is focused on helping luxurious brands discover and deliver a strategy online that helps grow their business. Taylor's role is principally a marketing one at present, but he also builds websites for clients when he is not working on the business.</p>
                        <p class="testimonial--desc">With a first class degree in business, Taylor is eager to learn what makes high net-worth individuals tick and to use that knowledge to better implement a digital marketing strategy for Lindores & Griffin's clients. Prior to starting Lindores & Griffin, Taylor was responsible for strategy and finance at Cobai Ltd and has also worked as a freelance web developer creating websites for clients such as Airtel Vodafone in Jersey, where he was born.</p>
                    </div>
                </div>
            </div>
            <div class="content__column">
                <div class="content__container">
                    <div class="testimonial">
                        <div alt="a profile picture of William Griffin, director of Lindores & Griffin sitting in a classic car" class="profile profile--william"></div>
                        <h4 class="testimonial--excerpt">MANAGING DIRECTOR</h4>
                        <h1 class="testimonial--name">WILLIAM HENRY GRIFFIN</h1>
                        <p class="testimonial--desc">As managing director of Lindores & Griffin, William Griffin’s business degree and career has so far been devoted to digital marketing in the high value goods sector. William started his first company in 2014 with a team of entrepreneurs, whilst working alongside an International Classic Car auction house. William quickly developed a reputation for his forward-thinking digital marketing campaigns and applied this to a traditional industry. The need for industry focused digital marketing grew and the demand for this service has resulted in the growth of Lindores & Griffin.</p>
                        <p class="testimonial--desc">As an entrepreneur, William enjoys working closely with other business owners, learning from them, as well as sharing insights from the ever evolving digital world. An avid Petrol-head, William also enjoys participating in car events around the world and has been a pit crew member for Barcelona 24-Hours.</p>
                    </div>
                </div>
            </div>

            <div class="content__column">
                <div class="content__container">
                    <div class="testimonial">
                        <div alt="a profile picture of Charlie Carroll, account manager within Lindores & Griffin sitting in a classic car" class="profile profile--charlie"></div>
                        <h4 class="testimonial--excerpt">ACCOUNT MANAGER</h4>
                        <h1 class="testimonial--name">CHARLIE CARROLL</h1>
                        <p class="testimonial--desc">Charlie is an account manager and business strategist for Digital Speed. Charlie began working for the company pretty much right away and he works hand in hand with most of our clients. He helps by engaging with our client’s online community. He does so by creating a range of relevant and interesting content to push sales, engaging with potential customers, and by generally being active within the social media community of our client. He understands that social media never sleeps and that there is a huge potential for bringing in business to our client. Often Charlie’s first task in the morning is to engage on social media as there is a real time demand for brand engagement online, and so timeliness is a priority. Additionally, Charlie will spend time strategizing future campaigns for both Digital Speed and our clients.</p>
                        <p class="testimonial--desc">In his free time, you will catch Charlie helping out local businesses or listening to business related podcasts. He is in the committee of a Cornish surf club, enjoys streaming music and keeping active outdoors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } get_footer(); ?>