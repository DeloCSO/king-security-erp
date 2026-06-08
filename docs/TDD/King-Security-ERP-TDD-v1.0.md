KING SECURITY ERP

Technical Design Document (TDD)

Version 1.0

Based on Invoice Ninja v5

June 2026

1\. Purpose

This document defines the technical implementation strategy for King Security ERP.

The goal is to extend Invoice Ninja v5 while preserving upgrade compatibility and minimizing modifications

to core Invoice Ninja functionality.

2\. Architectural Principles

Principle 1: Preserve Invoice Ninja Core

Do not modify:

• 

• 

• 

• 

• 

Invoice Models

Payment Models

Client Models

Quote Models

Core Billing Logic

Instead, extend functionality through:

• 

• 

• 

• 

New Models

New Services

New Controllers

New API Endpoints

Principle 2: Modular Development

All Security ERP features shall exist within a dedicated module structure.

1

Recommended structure:

app/ └── Security/ ├── Models ├── Services ├── Repositories ├── Controllers ├── Policies

├── Transformers └── DTOs

Principle 3: API First

Every feature must be accessible through REST APIs.

UI components should consume APIs rather than directly accessing models.

3\. Existing Invoice Ninja Components To Reuse

Client Module

Purpose:

Customer Management

Reuse:

• 

• 

• 

Client

Contact

Company

No modifications required.

Project Module

Purpose:

Site Management

Mapping:

Project → Security Site

Examples:

• 

• 

KLE Hospital

Love Dale School

2

Ugar Sugar Factory

• 

Benefits:

• 

• 

• 

Existing permissions

Existing reporting

Existing relationships

Document Module

Purpose:

Guard Documents

Store:

• 

• 

• 

• 

• 

Aadhaar

PAN

Police Verification

Medical Certificate

Training Certificates

No new document system required.

Location Module

Purpose:

Physical Site Location

Reuse existing Location entity.

Invoice Module

Purpose:

Billing

Must remain unchanged.

Attendance calculations will generate Invoice Ninja invoices through service integration.

3

4\. New Database Entities

guards

Purpose:

Employee Master

Fields:

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

id

company\_id

employee\_code

full\_name

father\_name

phone

alternate\_phone

address

date\_of\_birth

joining\_date

status

aadhaar\_number

pan\_number

esi\_number

epf\_number

bank\_account

ifsc\_code

created\_at

updated\_at

deployments

Purpose:

Guard Assignment

Fields:

• 

• 

• 

• 

• 

• 

id

guard\_id

project\_id

shift\_type

start\_date

end\_date

4

status

• 

Relationships:

Deployment belongs to Guard

Deployment belongs to Project

attendance

Purpose:

Daily Attendance

Fields:

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

id

guard\_id

project\_id

attendance\_date

shift

status

check\_in

check\_out

working\_hours

remarks

Statuses:

P A L WO H OT

incidents

Purpose:

Incident Reporting

Fields:

• 

• 

• 

• 

• 

id

project\_id

guard\_id

incident\_date

severity

5

• 

• 

• 

• 

category

description

action\_taken

attachment\_path

uniform\_issues

Purpose:

Asset Tracking

Fields:

• 

• 

• 

• 

• 

• 

id

guard\_id

item\_type

issue\_date

return\_date

condition

payroll\_registers

Purpose:

Salary Processing

Fields:

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

id

guard\_id

month

year

gross\_salary

advance

deductions

esi

epf

net\_salary

6

5\. Laravel Models

Create:

app/Security/Models/

Models:

• 

• 

• 

• 

• 

• 

Guard.php

Deployment.php

Attendance.php

Incident.php

UniformIssue.php

PayrollRegister.php

6\. Repositories

Create:

app/Security/Repositories/

Repositories:

• 

• 

• 

• 

• 

GuardRepository.php

DeploymentRepository.php

AttendanceRepository.php

IncidentRepository.php

PayrollRepository.php

Responsibilities:

• 

• 

• 

Query isolation

Data access abstraction

Reusable business queries

7\. Services

Create:

app/Security/Services/

7

Services:

• 

• 

• 

• 

• 

• 

GuardService.php

DeploymentService.php

AttendanceService.php

PayrollService.php

BillingService.php

IncidentService.php

Responsibilities:

Business logic only.

Controllers must remain thin.

8\. Controllers

Create:

app/Security/Controllers/

Controllers:

• 

• 

• 

• 

• 

GuardController.php

DeploymentController.php

AttendanceController.php

PayrollController.php

IncidentController.php

Responsibilities:

• 

• 

• 

Validation

Authorization

Service orchestration

No business logic.

9\. API Design

Base Route:

/api/v1/security

8

Endpoints:

GET /guards

POST /guards

PUT /guards/{id}

DELETE /guards/{id}

GET /attendance

POST /attendance

GET /deployments

POST /deployments

GET /incidents

POST /incidents

GET /payroll

POST /payroll/generate

10\. React Pages

Create:

resources/js/pages/security/

Pages:

• 

• 

• 

• 

• 

• 

• 

Guards

Guard Details

Deployments

Attendance

Payroll

Incidents

Uniform Register

9

11\. Permissions

Roles:

Super Admin

Operations Manager

HR Manager

Site Supervisor

Client User

Authorization:

Laravel Policies

Do not hardcode permissions.

12\. Billing Architecture

Attendance ↓ Deployment Validation ↓ Billable Man Days ↓ Billing Service ↓ Invoice Ninja Invoice

No direct invoice modification.

Use existing Invoice Ninja invoice creation services.

13\. Payroll Architecture

Attendance ↓ Working Days ↓ Salary Calculation ↓ Payroll Register ↓ Bank Transfer Report

14\. MVP Sprint Plan

Sprint 1

Guard Management

10

Deliverables:

• 

• 

• 

• 

Migration

Model

CRUD API

CRUD UI

Sprint 2

Site Management

Deliverables:

• 

• 

Project Mapping

Site Screens

Sprint 3

Deployment Management

Deliverables:

• 

• 

Deployment Entity

Assignment UI

Sprint 4

Attendance Management

Deliverables:

• 

• 

Attendance APIs

Attendance UI

Sprint 5

Payroll

Deliverables:

Payroll Engine

11

• 

Salary Register

• 

Sprint 6

Billing Automation

Deliverables:

• 

Attendance → Invoice Workflow

15\. AI Integration Strategy

Phase 1

Rule-based automation

Phase 2

AI Attendance Import

Phase 3

AI Payroll Assistant

Phase 4

AI Invoice Assistant

Phase 5

AI Contract Intelligence

16\. Non-Functional Requirements

Performance:

• 

< 2 second page loads

Scalability:

• 

10,000+ employees

12

Security:

• 

• 

• 

Role-based access control

Audit logging

Encrypted sensitive fields

Availability:

• 

• 

Docker deployment

Daily backups

17\. Success Criteria

MVP considered successful when:

• 

• 

• 

• 

• 

• 

Guards can be managed.

Sites can be managed.

Deployments can be assigned.

Attendance can be recorded.

Payroll can be generated.

Invoices can be automatically created from attendance.

13

