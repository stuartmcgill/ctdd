@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Title"
  :translated="true"
/>

<x-twill::wysiwyg
  name="text"
  label="Text"
  placeholder="Text"
  :toolbar-options="[
        ['header' => [2, 3, 4, true]],
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
  :translated="true"
/>
