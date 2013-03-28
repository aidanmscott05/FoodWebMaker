class StageLengths < ActiveRecord::Base
  attr_accessible :citation_id, :comment, :datum, :length, :stage_id, :user_id
  has_many :citations
  belongs_to :stage, :user
end