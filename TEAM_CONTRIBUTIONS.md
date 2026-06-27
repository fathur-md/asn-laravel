# Team Contribution Report

> **Document generated:** 27 June 2026
> **Repository:** `https://github.com/fathur-md/asn-laravel`

---

## Important Notes

This document was produced with the assistance of **OpenCode (Big Pickle Agent)**, an AI-powered code analysis tool. The analysis is based on the following repository evidence:

- **Git history** (`git log`, `git shortlog`) — every commit, its author, date, and message.
- **Git statistics** (`git shortlog -sne`) — contributor identity consolidation across multiple email addresses.
- **Git blame** (`git blame -f -w`) — line-by-line authorship attribution on all significant source files.
- **Repository structure** — the current file tree and project layout.
- **Source code analysis** — reading every controller, model, view, migration, factory, test, and config file.
- **Commit messages** — reviewing the stated intent of each change.

The AI was used exclusively to **summarize and organize** repository evidence into a structured report. No features, contributions, or responsibilities were invented by the AI. All conclusions are grounded in Git data or explicitly marked as inferred.

Additionally, this report incorporates **clarifications provided directly by the development team** (see [Team Clarification](#team-clarification-provided-by-the-development-team) below). These clarifications address contributions that Git history alone cannot fully capture.

**Important caveat:** Git history is an essential source of evidence, but it cannot perfectly represent every team member's contribution. Activities such as pair programming, planning, debugging, design discussions, and testing may not leave direct traces in the commit log. This report should be read with an understanding of these limitations.

---

## Project Overview

**DonasiKita** is a web-based donation crowdfunding platform that allows individuals or organizations to create fundraising campaigns for social, education, health, and disaster relief causes. Built with Laravel 13, Tailwind CSS 4, and Alpine.js 3.

- **Project duration:** 20 June 2026 – 26 June 2026 (7 days)
- **Total commits:** 85 (excluding merge commits that added no new content)
- **Number of contributors:** 5 (based on Git history), 5 listed team members
- **Main technologies:** PHP 8.4, Laravel 13, PostgreSQL, Tailwind CSS 4, Alpine.js 3.15, Vite 8, Pest 4

### Identity Normalization

Several contributors used multiple email addresses. They have been consolidated as follows:

| Normalized Name             | Git Author Names                  | Consolidated Emails                                                                                                              | Total Commits |
| --------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | ------------- |
| Muhammad Fathurrahman       | `fathur-md` (42), `fathur-m` (3)  | `fathurmuh@outlook.com`, `fathurmh98@gmail.com`                                                                                  | 45            |
| Ferdiyansyah Pratama Putra  | `ferdiyansyah pratama putra` (18) | `ferdiyansyahpp@gmail.com`, `aliookeu05@gmail.com`, `222272935+ferdi2104@users.noreply.github.com`, `enricoreyner2703@gmail.com` | 18\*          |
| Maria Violeta V. Wungubelen | `wungubelen` (20)                 | `verawungubelen01@gmail.com`                                                                                                     | 20            |
| Julius Flaviano Aleo Keu    | `ALIOOKEU` (1)                    | `aliookeu05@gmail.com`                                                                                                           | 1             |
| Enrico Reyner Lumenta       | —                                 | —                                                                                                                                | 0             |

> \* Ferdiyansyah has 18 unique commits attributed to `ferdiyansyah pratama putra`. His additional 4 commits (committed from aliookeu05@gmail.com and enricoreyner2703@gmail.com) overlap with the same git author name, so the actual deduplicated count is 18 commits.

---

## Team Clarification (Provided by the Development Team)

The following information comes directly from the project team members and is **not inferred from Git history**. It is intended to supplement the Git-based analysis with context that cannot be captured in commit logs.

### Ferdiyansyah Pratama Putra (Ferdi)

According to the team, Ferdiyansyah was responsible for:

- **Proposing the initial project idea** — conceiving the DonasiKita donation platform concept.
- **Designing the main application features** — defining the core functionality scope (campaign CRUD, donation system, authentication, dashboards).
- **Generating the initial implementation** of many project modules — creating the first working versions of controllers, views, and configurations.
- **Establishing the initial foundation** of the application — setting up the structural baseline that other team members built upon.

> **Source:** Direct clarification from the development team. This context explains why Ferdiyansyah's Git contributions are clustered around the initial burst of development activity, even though later refactoring by other members modified or replaced some of his original code.

### Muhammad Fathurrahman (Fathur)

According to the team, Fathurrahman primarily contributed by:

- **Improving backend logic** — enhancing data processing, validation rules, and query efficiency across controllers and models.
- **Refining application architecture** — restructuring code organization, improving separation of concerns, and adopting Laravel best practices (Route Model Binding, eager loading, accessors).
- **Improving frontend implementation** — polishing Blade templates, Tailwind CSS styling, and responsive design.
- **Fixing bugs** — addressing runtime errors, edge cases, and visual inconsistencies.
- **Improving stability** — hardening the application against invalid input, edge cases, and improper state transitions.
- **Refactoring existing code** — rewriting large portions of the initial implementation for maintainability, performance, and correctness.
- **Integrating and polishing previously implemented features** — connecting the authentication system with the campaign CRUD, dashboards, and donation flow into a cohesive whole.

> **Source:** Direct clarification from the development team. This context explains why Fathurrahman's Git contributions include numerous refactoring and optimization commits — much of his work involved improving and integrating code that had already been initially implemented.

### Julius Flaviano Aleo Keu (Aliokey)

According to the team, Aliokey contributed to the project, but some of the development work was performed using the **same laptop and Git identity** as Ferdiyansyah. Because of this shared workflow, Git history alone cannot accurately separate all of Aliokey's contributions from Ferdiyansyah's. **Git statistics may therefore underestimate Aliokey's actual participation.**

> **Source:** Direct clarification from the development team. The single commit attributed to `ALIOOKEU` in the Git log (updating team member details) likely represents only a fraction of his actual involvement.

### Enrico Reyner Lumenta (Rey)

According to the team, Rey likewise contributed to the project, but part of the work was completed on the **same development machine and Git account** used by Ferdiyansyah. This makes individual attribution incomplete in the Git history. **The lack of commits under Rey's own identity does not necessarily indicate a lack of contribution.**

> **Source:** Direct clarification from the development team. No commits in the Git log are attributable to Enrico Reyner Lumenta, but the team confirms his participation.

### Summary of Team Clarifications

| Member | Contribution as per Team Clarification | Git Visibility |
|---|---|---|
| Ferdiyansyah Pratama Putra | Project idea, feature design, initial implementation of all modules | High — 18 commits clearly attributed |
| Muhammad Fathurrahman | Backend improvement, architecture refinement, frontend polish, bug fixing, refactoring, integration | High — 45 commits clearly attributed |
| Julius Flaviano Aleo Keu | Contributed but shared laptop/Git identity with Ferdiyansyah | Low — 1 commit attributed |
| Enrico Reyner Lumenta | Contributed but shared laptop/Git identity with Ferdiyansyah | None — 0 commits attributed |

---

## Contribution Summary

The table below separates findings into two categories: what is **verified from repository evidence** (Git history, blame, source code) versus what is **confirmed by the development team** (see [Team Clarification](#team-clarification-provided-by-the-development-team) above).

### Verified from Repository (Git Evidence)

| Member                      | Total Commits | Key Files Authored | Git Blame Coverage |
| --------------------------- | ------------- | ------------------ | ------------------ |
| Muhammad Fathurrahman       | 45 (53%)      | 20+ files          | 100% of models, ~78% of CampaignController, ~85% of DashboardController, ~70% of views |
| Maria Violeta V. Wungubelen | 20 (24%)      | 5 files            | ~5% of CampaignController, ~31% of campaign index view, ~15% of campaign show view |
| Ferdiyansyah Pratama Putra  | 18 (21%)      | 4 files            | ~92% of AuthController, ~17% of CampaignController, ~100% of brand.php |
| Julius Flaviano Aleo Keu    | 1 (1%)        | 1 file (1 line)    | 0% (line later overwritten) |
| Enrico Reyner Lumenta       | 0 (0%)        | —                  | — |

> **Note:** Percentages do not sum to 100% because contributions overlap on shared files. "Git Blame Coverage" refers to surviving lines in the current production code.

### Team Confirmation (Direct Clarification)

| Member                      | Role (as per team) | Contribution Description |
| --------------------------- | ------------------ | ------------------------ |
| Ferdiyansyah Pratama Putra  | Project Lead       | Proposed project idea, designed features, created initial implementation foundation |
| Muhammad Fathurrahman       | Backend & Frontend | Improved backend logic, refined architecture, fixed bugs, refactored and integrated code |
| Julius Flaviano Aleo Keu    | Developer          | Contributed but shared laptop/Git identity with Ferdiyansyah; participation underestimated by Git |
| Enrico Reyner Lumenta       | Developer          | Contributed but shared laptop/Git identity with Ferdiyansyah; participation not captured in Git |
| Maria Violeta V. Wungubelen | Developer          | — (Git evidence aligns with team understanding) |

---

## Individual Summary

Each member's contribution is described in two parts: **Verified from Repository** (what Git evidence shows) and **Team Confirmation** (what the team has clarified beyond Git history).

---

### Muhammad Fathurrahman

#### Verified from Repository

- **Role Summary:** Primary developer — authored the majority of the production code.
- **Git Commits:** 45 commits (53% of all commits).
- **Major Features (Git evidence):**
    - Initial project scaffolding (Laravel 13, Vite, Tailwind CSS, Alpine.js)
    - Database migrations (users, campaigns, donations, comments)
    - All four models (Campaign, Donation, Comment, User) — 100% authorship per blame
    - Campaign CRUD — optimized/refactored the production version (~78% of CampaignController blame)
    - Donation system and comment system — entire `donate()` and `comment()` methods
    - User dashboard and admin dashboard — controller and all views
    - Home page landing page with stats, categories, featured campaigns, testimonials
    - Navigation bar, layout component, footer refinements
    - About page (initial design and team card component)
    - CampaignFactory, CampaignTest, DashboardTest
    - Vite configuration, CSS, JavaScript bootstrap
    - Deployment configuration (.env.example, .railwayignore, AppServiceProvider)
    - README and AGENTS.md documentation
- **Important Files:** `CampaignController.php`, `Campaign.php`, `Donation.php`, `Comment.php`, `DashboardController.php`, `HomeController.php`, `layout.blade.php`, `navbar.blade.php`, `home/index.blade.php`, `dashboard/index.blade.php`, `dashboard/admin.blade.php`, all migration files, `CampaignFactory.php`, `CampaignTest.php`, `DashboardTest.php`, `vite.config.js`, `app.css`, `app.js`
- **Contribution Level (Git):** High — primary author of ~66% of project code lines.
- **Shared Responsibilities:** CampaignController and campaign views were collaboratively refined with Maria Violeta and Ferdiyansyah. The AboutController was created by Fathurrahman and later modified by Ferdiyansyah.

#### Team Confirmation

- The team confirms that Fathurrahman's primary contributions were **improving backend logic, refining application architecture, improving frontend implementation, fixing bugs, improving stability, refactoring existing code, and integrating/polishing previously implemented features**.
- These responsibilities were performed **after the initial implementation** by Ferdiyansyah and therefore may not always be reflected as feature ownership alone.

---

### Ferdiyansyah Pratama Putra

#### Verified from Repository

- **Role Summary:** Authentication system author and initial application builder.
- **Git Commits:** 18 commits (21% of all commits).
- **Major Features (Git evidence):**
    - Authentication system — AuthController with showLogin, login, showRegister, register, logout methods (~92% blame)
    - Login and registration views (initial versions)
    - Initial CampaignController (235 lines in first commit — later ~83% overwritten by refactoring)
    - Initial campaign views (index, show, create — first drafts)
    - DashboardController (first version — later largely rewritten)
    - `config/brand.php` — sole author (100% blame)
    - `footer.blade.php` component — initial version
    - Navigation configuration (`navigation.php`) — modifications
    - User table migration — added role, phone, avatar columns
    - Campaign, donation, comment table modifications
    - AboutController — team member additions, removals, NIM and name updates
- **Important Files:** `AuthController.php` (sole author), `auth/login.blade.php` (initial author), `auth/register.blade.php` (initial author), `config/brand.php` (sole author), `AboutController.php` (modifications), initial versions of `CampaignController.php`, `DashboardController.php`, `campaigns/index.blade.php`, `campaigns/show.blade.php`, `campaigns/create.blade.php`
- **Contribution Level (Git):** Medium — foundational auth system and initial application structure. Much of his initial controller code was later overwritten by refactoring.
- **Shared Responsibilities:** CampaignController was initially written by Ferdiyansyah, then significantly restructured by Fathurrahman and Maria Violeta. AboutController was created by Fathurrahman and modified by Ferdiyansyah.

#### Team Confirmation

- The team clarifies that Ferdiyansyah was responsible for **proposing the initial project idea, designing the main application features, generating the initial implementation of many project modules, and establishing the initial foundation of the application**.
- This context explains why his Git contributions are concentrated in the early development phase.

---

### Maria Violeta V. Wungubelen

#### Verified from Repository

- **Role Summary:** CampaignController refinement and campaign view iteration.
- **Git Commits:** 20 commits (24% of all commits).
- **Major Features (Git evidence):**
    - CampaignController refinements — 7 commits: validation adjustments, redirect fixes, store method improvements
    - Campaign index view — 5 iterations: layout adjustments, UI improvements (~31% blame)
    - Campaign show view — full layout restructure (33+/-34 lines)
    - Campaign create view — form adjustments
    - Route registration for campaign endpoints
    - ProjectIdea model — minor update
- **Important Files:** `CampaignController.php` (7 commits), `resources/views/campaigns/index.blade.php` (5 commits), `resources/views/campaigns/show.blade.php`, `resources/views/campaigns/create.blade.php`, `routes/web.php`
- **Contribution Level (Git):** Medium — made numerous iterative improvements across campaign views and controller. Her changes were refinements rather than original feature creation.
- **Shared Responsibilities:** CampaignController and all campaign views were collaboratively maintained with Fathurrahman and Ferdiyansyah.

#### Team Confirmation

- No additional clarification was provided by the team beyond what Git evidence already shows. The Git record aligns with the team's understanding of Maria Violeta's role.

---

### Julius Flaviano Aleo Keu

#### Verified from Repository

- **Role Summary:** Minor contributor.
- **Git Commits:** 1 commit (1% of all commits).
- **Major Features (Git evidence):** None — single trivial commit updating team member details in a debug route.
- **Important Files:** `routes/web.php` (2 lines changed)
- **Contribution Level (Git):** Low — single minor commit. No surviving lines attributed in current production code.
- **Uncertainty:** The GitHub username `ALIOOKEU` (<aliookeu05@gmail.com>) is attributed to Julius Flaviano Aleo Keu inferred from the email handle and name alignment. This is inferred, not verified from Git data alone.

#### Team Confirmation

- The team clarifies that Aliokey did contribute to the project, but **some of the development work was performed using the same laptop and Git identity as Ferdiyansyah**. Because of this shared workflow, **Git history alone cannot accurately separate all of Aliokey's contributions**. Git statistics may therefore **underestimate his actual participation**.

---

### Enrico Reyner Lumenta

#### Verified from Repository

- **Role Summary:** No Git contributions detected.
- **Git Commits:** 0 commits.
- **Major Features (Git evidence):** None. Zero commits found under any name or email attributable to Enrico Reyner Lumenta. No files in the repository were authored by this team member.

#### Team Confirmation

- The team clarifies that Rey **did contribute to the project**, but part of the work was completed on the **same development machine and Git account used by Ferdiyansyah**, making individual attribution incomplete in Git history. **The lack of commits under Rey's own identity does not necessarily indicate a lack of contribution.**

---

## Collaboration Notes

### Collaborative Features

| Feature                              | Primary Author                             | Collaborators                                                         |
| ------------------------------------ | ------------------------------------------ | --------------------------------------------------------------------- |
| CampaignController                   | Muhammad Fathurrahman (production version) | Ferdiyansyah (initial version), Maria Violeta (bug fixes/refinements) |
| Campaign Views (index, show, create) | Muhammad Fathurrahman (optimized versions) | Ferdiyansyah (initial drafts), Maria Violeta (UI refinements)         |
| DashboardController                  | Muhammad Fathurrahman (production version) | Ferdiyansyah (initial skeleton)                                       |
| AboutController                      | Muhammad Fathurrahman (initial design)     | Ferdiyansyah (team member management)                                 |
| Database Migrations                  | Muhammad Fathurrahman (base migrations)    | Ferdiyansyah (column additions/modifications)                         |
| Auth Views                           | Ferdiyansyah (initial versions)            | Muhammad Fathurrahman (layout/styling updates)                        |

### Uncertainties

1. **Enrico Reyner Lumenta** is listed in the AboutController team data with role "backend2" and NIM 241110093, but has zero Git commits. This may indicate work done outside the repository (e.g., deployment, documentation, non-code contributions) or no contribution was made.

2. **Anggahrm** (<58013844+Anggahrm@users.noreply.github.com>) made 1 commit (changing a NIM in web.php). This GitHub username does not match any listed team member and may be an external collaborator or a team member using an unrecognized alias. The commit is trivial (1 line changed).

3. **ALIOOKEU / Julius Flaviano Aleo Keu** is inferred from email `aliookeu05@gmail.com` which contains "keu". The `ferdiyansyah pratama putra` author also committed twice from this same email, suggesting shared machine access.

4. **Commit counts do not equal code quality or significance.** Ferdiyansyah's initial CampaignController commit added 235 lines but was later largely overwritten. Maria Violeta's 20 commits include many small iterative changes rather than large feature additions.

---

## Limitations of Git-Based Analysis

Git history is a valuable record of who changed what and when, but it has inherent blind spots that are particularly relevant to this project:

| Limitation | Description | Relevance to This Report |
|---|---|---|
| **Shared development computers** | Multiple developers working on the same machine may commit under the same Git identity. | Ferdiyansyah committed from `aliookeu05@gmail.com` (Aliokey/Rey's email) twice. The team confirms Aliokey and Rey shared a laptop with Ferdiyansyah. |
| **Pair programming** | Two developers working together produces a single commit under one author. | The CampaignController was collaboratively developed by multiple members, but Git attributes each line to only one author. |
| **Offline collaboration** | Design discussions, planning meetings, and code reviews leave no Git trace. | Feature design (Ferdiyansyah) and architectural decisions involved all team members. |
| **Debugging and testing together** | Finding and reproducing bugs is collaborative, but only the final fix commit is recorded. | Maria Violeta's 7 CampaignController commits include bug fixes that may have been identified collaboratively. |
| **UI review and feedback** | Visual feedback on layouts and styling often happens outside Git. | Campaign view iterations by Maria Violeta incorporated feedback from the full team. |
| **Feature design and specification** | Deciding what to build and how it should work precedes any commit. | Ferdiyansyah's role in proposing the project idea and designing features is not captured in any commit. |
| **Knowledge sharing** | Helping teammates understand Laravel patterns, Blade syntax, or Tailwind classes. | Experienced members (Fathurrahman) assisted others, but this is not reflected in Git. |
| **Non-code contributions** | Documentation, research, project management, deployment coordination. | Some team members may have contributed in these areas without code commits. |

> **Key takeaway:** The absence of a Git commit does not mean an absence of contribution. This report uses team clarifications to fill gaps that Git-based analysis alone cannot address.

---

## Methodology

This report was generated using the following Git analysis techniques:

- **`git shortlog -sne --all`** — Identified all unique contributors and normalized their identities across different email addresses.
- **`git log --all --oneline`** — Reviewed every commit message to understand the purpose and scope of each change.
- **`git log --all --stat`** — Examined which files were modified in each commit to attribute feature development.
- **`git blame -f -w`** — Analyzed current line-by-line authorship of every important source file to identify the surviving author of each code segment.
- **`git log --all --format="%an %ai"`** — Determined the active period and chronological order of each contributor's work.
- **Source code analysis** — Cross-referenced the current state of every controller, model, view, migration, factory, test, and config file with Git blame data.
- **Identity consolidation** — Merged multiple email addresses and name variants for the same physical person.

---

## Academic Disclaimer

This report combines **repository evidence** (Git history, blame, source code analysis) with **clarifications provided directly by the development team** to produce a more accurate representation of each member's responsibilities.

**Git history should not be interpreted as the sole indicator of individual contribution.** As detailed in the [Limitations of Git-Based Analysis](#limitations-of-git-based-analysis) section, many forms of valuable contribution — pair programming, shared workstations, design discussions, debugging, testing, and knowledge sharing — do not always produce direct traces in the commit log.

The team clarifications in this report are **self-reported by the contributors** and have been included to supplement, not replace, the objective evidence from the repository. Where Git evidence and team clarifications differ, this report presents both perspectives so that readers can draw their own conclusions.

This document is intended for academic evaluation and reflects the best-effort reconstruction of contributions based on available data as of 27 June 2026.
