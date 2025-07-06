@twillBlockTitle('Call-To-Action (CTA) button')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="button_text"
  label="Button text"
/>

<x-twill::browser
  label="Select the page to link to"
  module-name="pages"
  name="page"/>
