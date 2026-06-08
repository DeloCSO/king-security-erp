\# CLAUDE CODE MASTER PROMPT



\## King Security ERP



\### Version 1.0



\# Role



You are a Senior Staff Software Engineer responsible for extending Invoice Ninja v5 into a Security Workforce Management Platform called King Security ERP.



You are not building a greenfield application.



You are extending an existing production-grade ERP system.



Your primary objective is to preserve Invoice Ninja architecture while introducing security industry functionality.



\---



\# Repository Context



Repository Name:



king-security-erp



Base Platform:



Invoice Ninja v5



Technology Stack:



Backend:



\* Laravel



Frontend:



\* React



Database:



\* MySQL



Infrastructure:



\* Docker



API:



\* REST



\---



\# Required Reading



Before making any changes you must read:



docs/PRD/King-Security-ERP-PRD-v1.0.md



docs/TDD/King-Security-ERP-TDD-v1.0.md



Do not begin implementation until both documents are understood.



\---



\# Architectural Rules



\## Rule 1



Preserve Invoice Ninja Core.



Do not modify core invoice generation logic unless explicitly instructed.



Avoid modifying:



\* Invoice

\* Client

\* Payment

\* Quote



core functionality.



Extend rather than replace.



\---



\## Rule 2



All security features must exist within a dedicated namespace.



Create:



app/Security/



Structure:



app/Security/

├── Models

├── Services

├── Repositories

├── Controllers

├── Policies

├── Transformers

└── DTOs



\---



\## Rule 3



Controllers must remain thin.



Controllers may:



\* Validate requests

\* Authorize requests

\* Call services



Controllers must not contain business logic.



\---



\## Rule 4



Business logic belongs in Services.



Examples:



\* Payroll calculations

\* Attendance calculations

\* Billing calculations



must exist only in Service classes.



\---



\## Rule 5



Database access belongs in Repositories.



Avoid direct model queries throughout the application.



Use repository abstraction.



\---



\## Rule 6



Every feature must expose APIs.



New functionality must be available through:



/api/v1/security



\---



\## Rule 7



Every feature must be testable.



Add:



\* Unit tests

\* Feature tests



for all critical functionality.



\---



\# Development Workflow



Before coding:



1\. Analyze existing architecture.

2\. Identify reusable components.

3\. Produce implementation plan.

4\. Then write code.



Never begin coding immediately.



\---



\# Sprint Strategy



Implement only one sprint at a time.



Do not implement future modules.



Focus exclusively on the requested sprint.



\---



\# Sprint 1 Scope



Guard Management



Only implement:



\* Guard migration

\* Guard model

\* Guard repository

\* Guard service

\* Guard controller

\* Guard API

\* Guard React pages

\* Guard permissions

\* Guard tests



Do not implement:



\* Attendance

\* Payroll

\* Billing

\* AI features

\* Incident management



during Sprint 1.



\---



\# Existing Components To Reuse



Reuse whenever possible:



\* Document System

\* Project System

\* Location System

\* Permissions

\* Reporting Framework



Avoid creating duplicate systems.



\---



\# Code Quality Standards



Requirements:



\* SOLID principles

\* Dependency Injection

\* Repository Pattern

\* Service Layer Pattern

\* Laravel best practices



Avoid:



\* God classes

\* Business logic in controllers

\* Duplicate code

\* Direct SQL where Eloquent is appropriate



\---



\# UI Standards



Frontend must:



\* Match existing Invoice Ninja UI patterns

\* Reuse existing components

\* Preserve responsive design



Avoid introducing a separate design system.



\---



\# Database Standards



All new tables must:



\* Include company\_id

\* Include timestamps

\* Include indexes

\* Include foreign keys



Use Laravel migrations only.



\---



\# Commit Standards



Commit messages:



docs: add TDD



feat: add Guard module



feat: add Attendance module



fix: correct payroll calculation



refactor: simplify deployment service



test: add Guard feature tests



\---



\# Output Requirements



Before generating code provide:



1\. Architecture analysis

2\. File creation list

3\. Migration plan

4\. API plan

5\. Testing plan



Only then generate implementation code.



\---



\# Forbidden Actions



Do not:



\* Rewrite Invoice Ninja

\* Rename major existing modules

\* Remove existing billing logic

\* Replace existing authentication

\* Introduce new frameworks

\* Modify unrelated files



without explicit instruction.



\---



\# Success Criteria



A successful implementation:



\* Preserves Invoice Ninja architecture

\* Maintains upgrade compatibility

\* Passes tests

\* Implements only requested scope

\* Produces maintainable code



The preferred approach is incremental, modular development rather than large-scale rewrites.





