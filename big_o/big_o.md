#Big O Notation
"The language we use for articulating how long an algorithm takes to run." [1]

##Introduction
Big O Notation is used to "express the runtime [of an algorithm] in terms of **how quickly the runtime grows relative to the input as the input gets arbitrarily large**. [1]"


This is all a fancy way to say that we are looking at abstract measures here, not concrete numbers. There are too many varying factors in computing to use concrete numbers. Not all processors run at the same speed, not all computers have the same amount of available memory, etc. There are infinite possible scenarios in which an algorithm could be running on any given computer. We can't use a concrete number to describe the performance of an algorithm because that number would only be applicable if the algorithm were to be run under the exact same circumstances every time.

##Notation
Before jumping into some examples, I will first quickly describe the notation used for Big O.

Big O notation is written as a function **O** with a parameter **n**. This will give us the basic format of **O(n)** where **n** is the number of inputs to the algorithm we are evaluating. In order to express the runtime of an algorithm, we will "modify" **n**. This will give us something like **O(n^2)** or **O(nlog(n))**. It will be more apparent how this works once we go through some examples.

##References
[1] https://www.interviewcake.com/big-o-notation-time-and-space-complexity
