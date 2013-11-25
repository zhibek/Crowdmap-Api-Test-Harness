Crowdmap-Api-Test-Harness
=========================

A test harness for the Crowdmap API.

For more information see:
https://api.crowdmap.com/developers/v1/

The following resources/methods are available on the API:

*SESSIONS*
* POST /session/login

*USERS*
* GET /users
* GET /users/:user_id
* PUT /users/:user_id
* GET /users/:user_id/posts
* GET /users/:user_id/avatar
* POST /users/:user_id/avatar
* DELETE /users/:user_id/avatar
* GET /users/:user_id/follows
* GET /users/:user_id/follows/:follower_id
* GET /users/:user_id/followers
* POST /users/:user_id/followers
* DELETE /users/:user_id/followers
* GET /users/:user_id/maps/following
* GET /users/:user_id/maps/collaborating
* GET /users/:user_id/maps/owns
* GET /users/:user_id/maps/associated
* GET /users/:user_id/notifications
* PUT /users/:user_id/notifications

*POSTS*
* GET /posts
* GET /posts/:post_id
* POST /posts
* PUT /posts/:post_id
* DELETE /posts/:post_id
* GET /posts/tags
* GET /posts/tags/:tag
* GET /posts/:post_id/tags
* GET /posts/:post_id/tags/:tag
* POST /posts/:post_id/tags
* DELETE /posts/:post_id/tags/:tag
* POST /posts/:post_id/like
* DELETE /posts/:post_id/like
* GET /posts/:post_id/comments
* GET /posts/:post_id/comments/:map_id
* POST /posts/:post_id/comments
* POST /posts/:post_id/comments/:map_id
* DELETE /posts/:post_id/comments/:comment_id
* GET /posts/:post_id/maps
* POST /posts/:post_id/maps
* DELETE /posts/:post_id/maps/:map_id

*MAPS*
* GET /maps
* GET /maps/:map_id
* POST /maps
* PUT /maps/:map_id
* DELETE /maps/:map_id
* PUT /maps/:map_id/claim
* GET /maps/:map_id/settings
* GET /maps/:map_id/settings/:setting
* POST /maps/:map_id/settings
* PUT /maps/:map_id/settings/:setting
* DELETE /maps/:map_id/settings/:setting
* GET /maps/:map_id/owner
* PUT /maps/:map_id/owner
* GET /maps/:map_id/collaborators
* POST /maps/:map_id/collaborators
* DELETE /maps/:map_id/collaborators/:collaborator_id
* GET /maps/:map_id/followers
* POST /maps/:map_id/followers
* DELETE /maps/:map_id/followers
* GET /maps/tags
* GET /maps/tags/:tag
* POST /maps/tags
* DELETE /maps/tags/:tag
* GET /maps/:map_id/posts
* GET /maps/:map_id/posts/tags
* GET /maps/:map_id/posts/:tags
* POST /maps/:map_id/posts/:post_id
* DELETE /maps/:map_id/posts/:post_id
* GET /maps/:map_id/posts/:post_id/marker
* PUT /maps/:map_id/posts/:post_id/marker
* POST /maps/:map_id/avatar
* POST /maps/:map_id/banner

*MEDIA*
* POST /media
* DELETE /media/:media_id

*LOCATIONS*
* GET /locations
* GET /locations/:location_id
* POST /locations

*EXTERNALS*
* GET /externals
* GET /externals/:external_id
* POST /externals

*COMMUNITY MODERATION*
* POST /moderate/comment/:comment_id
* POST /moderate/post/:post_id
* POST /moderate/map/:map_id
* POST /moderate/user/:user_id

*UTILITIES*
* GET /heartbeat
* GET /about
* GET /oembed
* GET /registeredmap/:subdomain