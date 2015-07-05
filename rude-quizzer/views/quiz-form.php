<?php
//complete code for views/quiz-form.php
return "<form method='post' action='index.php?page=quiz'>
        <p>What is the capital of kazakhstan?</p>
        <select name='answer'>
            <option value='almaty'>almaty</option>
            <option value='astana'>astana</option>
            <option value='twidledee'>twidledee</option>
            <option value='sarajevo'>sarajevo</option>
        </select>
        <input type='submit' name='quiz-submitted' value='post' />
    </form>";