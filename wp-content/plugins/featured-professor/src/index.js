import "./index.scss"

import {useSelect} from "@wordpress/data"

wp.blocks.registerBlockType("ourplugin/featured-professor", {
  title: "Professor Callout",
  description: "Include a short description and link to a professor of your choice",
  icon: "welcome-learn-more",
  category: "common",
  attributes: {
    professorId: {type: String, }
  },
  edit: EditComponent,
  save: function () {
    return null
  }
})

function EditComponent(props) {
  const allProfessors = useSelect(select => {
    return select('core').getEntityRecords('postType', 'professor', {per_page: -1, }) // this retrieves the data for the customPost asynchonously
  })
  // console.log(allProfessors)
  if (allProfessors === null) return <p>Loading...</p>
  return (
    <div className="featured-professor-wrapper">
      <div className="professor-select-container">
        <select onChange={e => props.setAttributes({professorId: e.target.value})}>
          <option value="">Select a professor</option>
          {
            allProfessors.map(professor => {
              return (
                <option value={professor.id} selected={props.attributes.professorId == professor.id}>{professor.title.rendered}</option>
              )
            })
          }
        </select>
      </div>
      <div>
        The HTML preview of the selected professor will appear here.
      </div>
    </div>
  )
}