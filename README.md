<h1 align="center">PHP Serverless Project's Sample Lambda: create a Blade form with the Illuminate view package, made with the Serverless Framework and Bref</h1>

<br>

<p align="center">
    <strong>Sample PHP Lambda function to render a Blade form, made with the Illuminate view package, without mounting an entire Laravel Framework web app. Made with the Serverless Framework and Bref</strong>
</p>

<br>

<hr>

## Quick Shpiel

<br>

When I first looked at using Lambda, the number one thing I really wanted to know was: could I render a Blade form without mounting an entire Laravel Framework web app. This would be so fan-tan-bu-lous-ly helpful that this ability alone would be worth learning Lambda (oh...it is true... be careful what you wish for).

I had never tried to render a Blade form on its own before, incredibly, but I was sure that it could be done. And, if it could be done, could it be done on Lambda? And, if it could be done on Lambda, could it be done without having to physically set up the production environment? 

<br>

(i) Could I render a Blade form by composer installling individual Illuminate packages? Yes. 

I did a video about using individual Illuminate packages, at [https://phpserverlessproject.com/video/app-less-laravel-keeping-it-classy](https://phpserverlessproject.com/video/app-less-laravel-keeping-it-classy).

<br>

(ii) Could I render a Blade form thusly on Lambda? Yes. 

Which led me to write this blog post: [https://phpserverlessproject.com/lambda-writable-folder-tmp](https://phpserverlessproject.com/lambda-writable-folder-tmp).

<br>
(iii) Could it be done on Lambda without having to physically set up prod? Yes. 

<br>
<br>

<hr>

## Props to Matt Stauffer's Kick-Ass "Torch" Repo!

<br>

A very special thank you to Matt Stauffer for putting together his ["Torch" repo](https://github.com/mattstauffer/Torch). It was well after midnight, I couldn't quite get the rendering to work, and I vaguely remembered reading about someone figuring out how to use pieces of the Laravel Framework, without launching the Framework in an app. So I searched. I found Matt's Torch repo, and successfully rendered a Blade form using his ["view component"](https://github.com/mattstauffer/Torch/tree/master/components/view).

It worked so well that [I created a repo](https://github.com/lasallesoftware-serverless/render-blade-lambda) to adapt Torch's view component, to streamline the code for specific use on Lambda.



<br>
<hr>

## Links
<br>

- [Installation][]
- [Caveats][]
- [Changelog][]

<br>
<hr>

## Copyright and License
<br>

lasallesoftware-serverless/sample-lambda-create-form-with-illuminate-view-package is copyright © The South LaSalle Trading Corporation and
licensed for use under the MIT License (MIT).

Please see [LICENSE][] for more information.

As reference, there is a wonderful blog post called [The MIT License, Line by Line -- 171 words every programmer should understand](https://writing.kemitchell.com/2016/09/21/MIT-License-Line-by-Line.html).

<br><br>
<hr>
<br>

>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


[installation]: https://github.com/lasallesoftware-serverless/sample-lambda-hello-world/blob/master/INSTALLATION.md
[caveats]: https://github.com/lasallesoftware-serverless/sample-lambda-hello-world/blob/master/CAVEATS.md
[changelog]: https://github.com/lasallesoftware-serverless/sample-lambda-create-form-with-illuminate-view-package/blob/master/CHANGELOG.md
[license]: https://github.com/lasallesoftware-serverless/sample-lambda-hello-world/blob/master/LICENSE.md