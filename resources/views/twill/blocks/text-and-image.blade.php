@twillBlockTitle('Text and image (2 columns)')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Title"
/>

<x-twill::radios
  name="flip_order"
  label="Flip column order?"
  :options="[
    ['value' => 0, 'label' => 'No'],
    ['value' => 1, 'label' => 'Yes'],
  ]"
  default="0"
/>

<x-twill::wysiwyg
  name="text"
  label="Text"
  placeholder="Text"
  :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean',
        'blockquote',
    ]"
/>

<x-twill::medias
  name="highlight"
  label="Image"
/>
