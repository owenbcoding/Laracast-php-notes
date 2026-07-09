Start the projects local server!

php -S localhost:8888

Explain this project. Do not edit any files yet.

Then open app.py, highlight the greet function, and ask:

Refactor this function to use an f-string. Show me the change first.

Use qwen2.5-coder:7b for that.

For planning, switch to qwen3:8b and ask:

Give me 5 small project ideas I can build to practice local AI agents with WSL and Ollama.

qwen2.5-coder:7b
Coding, debugging, repo explanations, tests, refactors, OpenCode default.

qwen3:8b
Planning, architecture, reasoning, comparing approaches, project breakdowns.

phi4-mini:latest
Fast notes, quick summaries, simple shell/code questions.

qwen2.5vl:3b
Screenshots, UI images, diagrams, visual debugging.

Your first real workflow

Once the test project works, open one of your actual projects and use this flow:
