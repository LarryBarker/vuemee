# Ion Learning coding exercise

This exercise is aimed at showing off your skills and to provide points of discussion for the next interview stage (the technical call). Due to time limitation on the exercise, it is important to show off known practices and code, and if required, add some extra comments to explain how the code would have been developed further. The time limil will also be used as an understanding of time management and should therefore be followed as intendend.

## The Application

Create an application that will provide a basic feature to create a movie database. This should showcase your Laravel architecture knowledge, advanced Eloquent relationship, Vue frontend and the best attempt at Design.

The idea is that the user will be able to "give" away their movie ticket, see what movies are available and also rate or comment on them.

##  Rule:
- Unless told otherwise, we assume that all the code pushed has been made by yourself.
- If copying things from the internet (like a design component), make sure to either understand the code or state this within the code.
- jQuery CANNOT be used within the application
- The exercise should be pushed up on a GitHub repository (please do not name it Ion Exercise or anything that includes ion in the name)
- There is freedom to showcase any of your skills, even if it is not mentioned in the following "requirements".
- Use the latest Laravel version with Vue
- The stories are all mixed up, and should be prioritised accordingly
- keep track of time

## Requirements



Story
As an user I would like the home page to show two rows, one with movies that have a review scores (showing the review number and average) and one with movies without reviews.

Story
As an user of the appliction, I would like to be able to have a display page of a specific movies and click on a movie within my home page to see more details 

Story
As an user I would like a movie to have the following basic information: title, description, length and start times, maybe number of tickets available (note: welcome to add other features you feel are nessacary).

Story
As an user I would like to be able to add a review to a given movie. This should be a value from 0 to 5. (note: we should add relationship between reviewer and user too, even if not used within the exercise)

Story
As an user of the application, I would like to be able to Login or Register within the application, so that my requests and information are safe and secure.

Story
As an user of the application, I would like the look and feel of the app to be nice and clean so that I can easily navigate and use the command within it.

Story
As a developer of the application, I would like the app to be fully defined with the correct database setup, to allow any developer to get up and running with FAKE data very quickly.

Story
As an user of the application, I would like to have a list of movies displayed with the title in my local movies charity shop database after logging in.