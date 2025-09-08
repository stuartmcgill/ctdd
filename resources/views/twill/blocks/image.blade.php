@twillBlockTitle('Image')
@twillBlockIcon('b-button')
@twillBlockGroup('app')

@twillBlockValidationRules([
'highlight' => 'required',
])

<x-twill::medias
  name="highlight"
  label="Highlight"
/>

<x-twill::wysiwyg
  name="caption"
  label="Image caption"
  :toolbar-options="[
        'link',
        'clean'
    ]"
/>
