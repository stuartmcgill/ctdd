@twillBlockTitle('Video link')
@twillBlockIcon('video')
@twillBlockGroup('app')

@twillBlockValidationRules([
'name' => 'required',
'embeddedText' => 'required',
])

<x-twill::input
  name="name"
  label="Name"
  :required="true"
  note="For internal use only"
/>

<x-twill::input
  name="embeddedText"
  label="Copy the embed video HTML here"
  :required="true"
  type="text"
  placeholder='e.g. <iframe width="560" height="315" src="https://www...</iframe>'
/>
