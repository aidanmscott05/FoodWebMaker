class Feedback
  attr_accessor :subject, :email, :comment, :page

  def initialize(params = {})
    self.subject = params[:subject]
    self.email = params[:email]
    self.comment = params[:comment]
    self.page = params[:page]
  end

	 def feedback(feedback)
    @recipients = 'foodwebbuilder@googlegroups.com'
    @from = 'admin@foodwebbuilder.com'
    @subject = "[Feedback for YourSite.com] #{feedback.subject}"
		end
  def valid?
    self.comment && !self.comment.strip.blank?
  end

end