<!-- Get in touch form -->
<div class="col-md-10 col-md-offset-1 animate-box" style="padding-top: 3em">
    <h3>Get in touch with us...</h3>
    <form method="post" action="">
        @csrf
        <div class="row form-group">
            <div class="col-md-6 padding-bottom">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" required>
            </div>
            <div class="col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <label for="message">Message</label>
                <textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
            </div>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Send Message" class="btn btn-primary">
        </div>

    </form>
</div>
<!-- Get in touch form -->
