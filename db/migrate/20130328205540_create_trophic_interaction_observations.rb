class CreateTrophicInteractionObservations < ActiveRecord::Migration
  def change
    create_table :trophic_interaction_observations do |t|
      t.integer :cite_id
      t.integer :trophic_interaction_id
      t.integer :location_id
      t.string :lethality
      t.string :structures_consumed
      t.decimal :percentage_consumed
      t.decimal :percentage_diet
      t.string :percentage_diet_by
      t.string :prefernce
      t.string :observation_type
      t.text :comment
      t.string :datum
      t.integer :user_id

      t.timestamps
    end
  end
end