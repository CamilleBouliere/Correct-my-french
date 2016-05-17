# Correct-my-french
A very basic snippet to french punctuation. It adds a non-breaking space before: "?", "!" and ":".

## What it does
You'll never again see this:

> Bien sûr que je suis de gauche<br>
> **!** Je mange de la choucroute,<br>
> je bois de la bière !

Instead it will be converted to:

> Bien sûr que je suis de<br>
> gauche **!** Je mange de la<br>
> choucroute, je bois de la<br>
> bière !

HTML:

> Bien sûr que je suis de<br>
> gauche&amp;nbsp;! Je mange de la<br>
> choucroute, je bois de la<br>
> bière&amp;nbsp;!

/ *Quotation, by [Jacques Chirac](https://www.facebook.com/Chirac-2017-685064468212847/)*

## Usage

```
$better_typography_text = correct_my_french($bad_typography_text);
```

## "It's a piece of shit! I need a real program, to make a real job. I could have done this myself!!! I need a bigger package, NOW!"

Shut up and take [JoliTypo](https://github.com/jolicode/JoliTypo)!
