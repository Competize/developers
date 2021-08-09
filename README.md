# Competize Developers

Competize for developers provides access to the public [Competize's platform](https://www.competize.com)
 API.
 
We created Competize, years ago, with one main target. Reduce the gap between amateur and professional football. That´s the reason because our platform is complete free.

Now, with the [Competize for developers platform](https://devs.competized.com), we are giving the next natural step. We´re sharing the core of Competize to help you creating football competitions with no hassle.

With a Competize developer's account, you can manage your own organizations, competitions, teams, players, matches, pitches, etc throught our API. We offer private store for your data, assuring no one else could access to them, and the best of all, we are offering all the logic of creating and updating tables, schedules, rankings, etc, with just a couple of requests.

So, anyone can easily create their own competition site, or mobile app, without worriyng about the backend side. You take care of presenting the data as you desire, we'll do the dirty work.

Visit our [official documentation](https://www.developers.football-tracker.com/documentation) to check out all the posibilities.

### Examples

In this repo you can find some examples written in PHP of making request to the API. To execute them simply:
```sh
$ php <name of the file>
```
If you prefer, you can use our [UI](https://www.devs.competize.com/documentation), or just execute curl requests. 

To test the examples you need to sign up as a [Competize developer](https://devs.competize.com/signup), and create an app. All the apps has 15 days of free trial, so you can test the API before deciding if you want to go ahead with us.

There are three basic examples in this repo:
- Example1.php: Creates a new Organization with one competition. The competition is a single leg league with 8 teams.
Two pitches are registered on the competition, available on Saturday at 18:30 and 19:30, so there are four matches each Saturday. Tweak the jsons on the input to customize the data of the example.
- Example2.php: This example gets all the data of a Organization and stores in the output folder.
- Example3.php: This example gets all the data of a Competition and stores in the output folder.

Feel free to fork this repo, create your own examples and submit a PR.

### Development

Want to contribute? Great!
Feel free to fork this repo, create your own examples and submit a PR.

###License
Copyright 2021 Competize Soloutions Limited

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
