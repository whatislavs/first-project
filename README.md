## Remaining questions
- How to pull a specific folder from github repository?
- When to use @extend vs components?
- When to use partials vs components?
- When to use auth() vs User::? Did I use auth() correctly in UserController update() function?
- unverified() function in UserFactory - how to use it? why is it highlighted as error?
- Why does scopeFilter() function gets executed in Listing model if it is not called anywhere? (~01:54:00 in video)
- How does $query work in Listing model?

## Follow-up project idea - Grocery list
- User registration
- Add grocery items and amounts
- Categorize items (optional)
- Add regularity (optional, default = each time)
- When starting a new grocery session (not-new-user) - the system asks if you need anything from the items starting with the largest regularity, you can see and check/uncheck these items, and checked ones will be added to the list which has "each time" purchesable items. "Each time" list is not given as a prompt and by default is assumed to be purchesable this time as well without asking.
- Separate simplified flow for Onboarding - add items, add regularity (optional) -> ready first list

### Out-of-scope feature ideas
- Store mapping to scroll to the category matching the isle in the store you are in
- Discounts on items and suggestions for better deals 
- Basket nutritional value approximation and daily average

