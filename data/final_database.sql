DROP DATABASE IF EXISTS lure_db;

CREATE DATABASE IF NOT EXISTS lure_db;

USE lure_db;




CREATE TABLE lure_table(

	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,

	name CHAR(30),
	
	price DEC(5,2),
	
	description TEXT,
	
	lrg_img CHAR(25),
	
	thumb_img CHAR(25)

);



INSERT INTO lure_table
	
	(name, price, description, lrg_img, thumb_img)
	
	VALUES

		("Allwater Minnow",8.99,"This lure features a tight wobbling action that simulates baitfish found all around the world. Comes in two different balsa wood constructions; the classic, featuring a clear deep diving lip, and the bleeding pattern, with bleeding gills and a deep red diving lip. Effective for catching bass, trout, pike, perch and walleye. Dives about 5-11 feet.","minnow.jpg","minnow_thumb.jpg"),

		("Allwater Crayfish",8.99,"Crawfish lures look pretty realistic sitting on the bottom of a pond or stream, but the realistic motion of our crayfish lure is the difference between the competition. It has a hinged lip that mimics the movement of real crayfish. Drives fish crazy! Great for use along drop-offs and highly vegetated areas. Also works well on rocky and muddy bottoms.","crayfish.jpg","crayfish_thumb.jpg"),

		("Allwater Spinnerbait",9.29,"Made of durable titanium, this lifetime-lasting spinnerbait will still be catching fish, strike after strike. The metal finish on the baitfish head makes for a realistic color and flash. Gold-colored and nickel-plated blades with beveled edges add extra action. The silicone skirts are easy to replace, and the Allwater Superspin comes with a premium ball bearing swivel.","spin.jpg","spin_thumb.jpg"),

		("Allwater Tubefish",5.79,"The thrashing motion of the rear single prop makes the Allwater Tubefish a perfect imitation of a wounded baitfish. The hydrodynamic shape lets you reach shallow water pockets.","tube.jpg","tube_thumb.jpg"),

		("Allwater Field Mouse",11.75,"Large bass and pike watch near-shore seedbeds, hoping to catch a field mouse. This tangle free lure plays into that ambush instinct with a side-to-side swimming action. The hollow body makes it super realistic.","mouse.jpg","mouse_thumb.jpg"),
				
		("Allwater Plain Spoon",6.80,"The one of a kind design makes an unpredictable erratic action without a line twist. Constructed from solid brass featuring a highly hydrodynamic shape, this lure gets amazing casting distances. Catches anything from trout to stripers. It won't break, corrode, bend, or even tarnish.","spoon.jpg","spoon_thumb.jpg"),

		("Allwater Frog",10.75,"As far as hollow-body frogs go, this is the most realistic. Its painless action using just a twitch retrieve makes for trophy bass in deep heavy cover. The most detailed anatomy and color catch the biggest bass.","frog.jpg","frog_thumb.jpg"),
		
		("Allwater Thinblade",3.25,"The Thinblade has a built in rattle that attracts all the predator species. Big eyes and realistic colors make this lure ultra tempting.","thinblade.jpg","thinblade_thumb.jpg"),

		("Allwater Cranker",15.50,"A truly groundbreaking lure. This deep running snagless lure is designed to be used through heavy fish-holding cover like grass, brush and rocks. When a fish strikes, the jaw pressure raises the hook to catch the fish's mouth. Once on the hook the point lowers again and the lure's flat end locks over the fish's jaw, keeping that fish caught. The lure's sturdy, large lip can be held when releasing the fish, to reduce the amount of possible harmful handling. At rest the lure floats. The faster you retrieve, the deeper it dives, up to 28 feet deep.","crank.jpg","crank_thumb.jpg"),

		("Allwater Super Shad",4.50,"This long distance casting, rattling and suspending bait darts and cuts aggressively. A textured body with very prominent scales reflects light to attract attention. Internal transfer weight system for long distance casting. ","shad.jpg","shad_thumb.jpg");


CREATE TABLE user_table(
	user_id INT PRIMARY KEY auto_increment,
	username CHAR(20),
	password CHAR(20),
	privilege ENUM("normal","admin","super")
);

INSERT INTO user_table
	VALUES
	(null,"admin","admin","admin");


SELECT * FROM lure_table;
SELECT * FROM user_table;