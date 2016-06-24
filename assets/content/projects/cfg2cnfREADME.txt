README
===============

Known inputs that work and what their outputs should be:
Example of how to convert, shown on pg. 108 of textbook
S -> ASA | aB
A -> S | B
B -> b | /

gives (copied from book):
S0 -> AC | UB | a | SA | AS
S -> AC | UB | a | SA | AS
A -> b | AC | UB | a | SA | AS
C -> SA
U -> a
B -> b

Program gives:
S0 -> AC | DB | a | SA | AS
S -> AC | DB | a | SA | AS
A -> AC | DB | a | SA | AS | b
B -> b
C -> SA
D -> a

where D corresponds to U, and that is the only difference




Exercise 2.14 (page 129):
A -> BAB | B | /
B -> 00 | /

gives: (solved by University of Central Florida and displayed in a PDF of selected solutions: http://www.cs.ucf.edu/courses/cot4210/fall04/answers/hw4sol.pdf)
S0 -> BA1 | AB | BA | B1 B1 | BB | /
A -> BA1 | AB | BA | B1 B1 | BB
B -> B1B1
B1 -> 0
A1 -> AB

Execution of program gives:
S0 -> BC | AB | BA | BB | DD | /
A -> BC | AB | BA | BB | DD
B -> DD
C -> AB
D -> 0

D corresponds to B1, A1 to C.

Note: outputs from the program may not match perfectly with non-terminals used, but rules match, which is important part.