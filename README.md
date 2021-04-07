# Production Line Task

This is a tiny coding task.

### Task
Design and implement an aligner production line.

- The production line consists of many different machines responsible for different process:
  - 3d printing.
  - Cleaning.
  - Sorting.
  - Thermoforming.
  - Trimming.
  - Packing.
- Every machine expects some kind of input and produces a result which is used by the next machine in sequence.
- The requirement is that the order of the machines can be changed and new ones can be added at any point of the production line.

### My implemetation
I decided to use the chain-of-responsibility design pattern.
